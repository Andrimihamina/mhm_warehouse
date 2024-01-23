<?php
// NDS
include_once("../../../../env/dns_warehouse.php");
$id_code_in = $_SESSION["suppliers"]["id_code_in"];

// extraction des données à afficher dans le sous-titre 
$requete = "SELECT * FROM flux_in WHERE id_in ='$id_code_in'";
$result = mysqli_query($dbc, $requete);
$flux = mysqli_fetch_array($result);
mysqli_free_result($result);

// ID FLUX
$flux_id = $flux["suppliers"];

$sql_affiche_suppliers= "SELECT * FROM `suppliers` WHERE `id_suppliers` = '$flux_id'";
$requete_affiche_suppliers= $db->query($sql_affiche_suppliers);
$affiche_suppliers = $requete_affiche_suppliers->fetch();

// NAME SUPPLIERS
$sup =$affiche_suppliers["name"];


require("../../../../fpdf/fpdf.php");
class PDF_MySQL_Table extends FPDF
{
protected $ProcessingTable=false;
protected $aCols=array();
protected $TableX;
protected $HeaderColor;
protected $RowColors;
protected $ColorIndex;

function Header()
{
    // Print the table header if necessary
    if($this->ProcessingTable)
        $this->TableHeader();
}

function TableHeader()
{
    $this->SetFont('Times','B',7);
    $this->SetX($this->TableX);
    $fill=!empty($this->HeaderColor);
    if($fill)
        $this->SetFillColor($this->HeaderColor[0],$this->HeaderColor[1],$this->HeaderColor[2]);
    foreach($this->aCols as $col)
        $this->Cell($col['w'],6,$col['c'],1,0,'C',$fill);
    $this->Ln();
}

function Row($data)
{
    $this->SetX($this->TableX);
    $ci=$this->ColorIndex;
    $fill=!empty($this->RowColors[$ci]);
    if($fill)
        $this->SetFillColor($this->RowColors[$ci][0],$this->RowColors[$ci][1],$this->RowColors[$ci][2]);
    foreach($this->aCols as $col)
        $this->Cell($col['w'],5,$data[$col['f']],1,0,$col['a'],$fill);
    $this->Ln();
    $this->ColorIndex=1-$ci;
}

function CalcWidths($width, $align)
{
    // Compute the widths of the columns
    $TableWidth=0;
    foreach($this->aCols as $i=>$col)
    {
        $w=$col['w'];
        if($w==-1)
            $w=$width/count($this->aCols);
        elseif(substr($w,-1)=='%')
            $w=$w/100*$width;
        $this->aCols[$i]['w']=$w;
        $TableWidth+=$w;
    }
    // Compute the abscissa of the table
    if($align=='C')
        $this->TableX=max(($this->w-$TableWidth)/2,0);
    elseif($align=='R')
        $this->TableX=max($this->w-$this->rMargin-$TableWidth,0);
    else
        $this->TableX=$this->lMargin;
}

function AddCol($field=-1, $width=-1, $caption='', $align='L')
{
    // Add a column to the table
    if($field==-1)
        $field=count($this->aCols);
    $this->aCols[]=array('f'=>$field,'c'=>$caption,'w'=>$width,'a'=>$align);
}

function Table($dbc, $query, $prop=array())
{
    // Execute query
    $res=mysqli_query($dbc,$query) or die('Error: '.mysqli_error($dbc)."<br>Query: $query");
    // Add all columns if none was specified
    if(count($this->aCols)==0)
    {
        $nb=mysqli_num_fields($res);
        for($i=0;$i<$nb;$i++)
            $this->AddCol();
    }
    // Retrieve column names when not specified
    foreach($this->aCols as $i=>$col)
    {
        if($col['c']=='')
        {
            if(is_string($col['f']))
                $this->aCols[$i]['c']=ucfirst($col['f']);
            else
                $this->aCols[$i]['c']=ucfirst(mysqli_fetch_field_direct($res,$col['f'])->name);
        }
    }
    // Handle properties
    if(!isset($prop['width']))
        $prop['width']=0;
    if($prop['width']==0)
        $prop['width']=$this->w-$this->lMargin-$this->rMargin;
    if(!isset($prop['align']))
        $prop['align']='C';
    if(!isset($prop['padding']))
        $prop['padding']=$this->cMargin;
    $cMargin=$this->cMargin;
    $this->cMargin=$prop['padding'];
    if(!isset($prop['HeaderColor']))
        $prop['HeaderColor']=array();
    $this->HeaderColor=$prop['HeaderColor'];
    if(!isset($prop['color1']))
        $prop['color1']=array();
    if(!isset($prop['color2']))
        $prop['color2']=array();
    $this->RowColors=array($prop['color1'],$prop['color2']);
    // Compute column widths
    $this->CalcWidths($prop['width'],$prop['align']);
    // Print header
    $this->TableHeader();
    // Print rows
    $this->SetFont('Times','',7);
    $this->ColorIndex=0;
    $this->ProcessingTable=true;
    while($row=mysqli_fetch_array($res))
        $this->Row($row);
    $this->ProcessingTable=false;
    $this->cMargin=$cMargin;
    $this->aCols=array();
}
}

class PDF extends PDF_MySQL_Table
{
function Header()
{
  $this->SetY(2);
  // Logo : 8 >position à gauche du document (en mm), 2 >position en haut du document, 80 >largeur de l'image en mm). La hauteur est calculée automatiquement.
  $this->Image('../../../../boostrap/assets/img/apple-touch-icon.png',2,3,20);

  // Titre gras (B) police Helbetica de 11
  $this->SetFont('Times','B',10);
  // fond de couleur gris (valeurs en RGB)
  $this->setFillColor(255,255,255);
  $this->SetTextColor(55, 93, 119);
   // position du coin supérieur gauche par rapport à la marge gauche (mm)
  $this->SetY(2);
  $this->SetX(30);
  // Texte : 60 >largeur ligne, 8 >hauteur ligne. Premier 0 >pas de bordure, 1 >retour à la ligneensuite, C >centrer texte, 1> couleur de fond ok  
  $this->Cell(0,7,'MHM WAREHOUSE',0,1,'C',1); 
  $this->ln(10);
    // Ensure table header is printed
    parent::Header();
}
 // Footer
 function Footer() {
  // Positionnement à 1,5 cm du bas
  $this->SetY(-15);
  // Police Arial italique 8
  $this->SetFont('Times','I',8);
  // Numéro de page, centré (C)
  $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}}

$sql = "SELECT * FROM `flux_in` WHERE `done` = 1";
$sql_1 = "SELECT `categories`,`id_abrev_code`,`purchase_date` , `descriptions`, `quantity_added`, `purchase_price` FROM `flux_in` WHERE id_in ='$id_code_in' and done =1 and cancel != 1";
$pdf = new PDF('P', 'mm', array(100,70));
$pdf->AddPage();
// Compteur de pages {nb}
$pdf->AliasNbPages();
// Sous-titre calées à gauche, texte gras (Bold), police de caractère 11
$pdf->SetFont('Times','B',7);
// couleur de fond de la cellule : gris clair
$pdf->setFillColor(255,255,255);
$pdf->SetY(10);
$pdf->SetX(23);

// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
$pdf->Cell(30,3,$flux['purchase_date'],0,1,'L',1);
$pdf->SetX(23);  
$pdf->Cell(30,3,$sup,0,1,'L',1);  
$pdf->SetX(23);  
$pdf->Cell(30,3,strtoupper(('PF:'.$flux['Proforma_number'])),0,1,'L',1);
$pdf->SetX(23);  
$pdf->Cell(30,3,strtoupper(('BL:'.$flux['bill_number'])),0,1,'L',1);  

$pdf->setFillColor(255,255,255);
$pdf->SetY(10);
$pdf->SetX(45);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
$pdf->Cell(30,3,strtoupper(('INPUT:'.$flux['id_in'])),0,1,'L',1);
$pdf->SetX(45);  
$pdf->Cell(30,3,strtoupper(('Resp:'.$flux['name_adding'])),0,1,'L',1);  
$pdf->SetX(45);  
$pdf->Cell(30,3,strtoupper(('PM:'.$flux['modus_payement'])),0,1,'L',1);
$pdf->SetX(45);  
$pdf->Cell(30,3,strtoupper(('EXP:'.$flux['payment_due_date'])),0,1,'L',1);  
$pdf->ln(5);  

// Second table: specify 3 columns
$pdf->AddCol('descriptions',40,'Descriptions','L');
$pdf->AddCol('quantity_added',9,'Qt','C');
$pdf->AddCol('purchase_price',10,'Pr','C');
$prop = array('HeaderColor'=>array(255,255,255),
            'color1'=>array(255,255,255),
            'color2'=>array(255,255,255),
            'padding'=>2);
$pdf->Table($dbc,$sql_1,$prop);

$id_in = $flux['id_in'];
$name= $id_in . ".pdf";

//telecharger
$pdf->Output('F', "../../../../../warehouse_img/img/flux/input/$name"); 

$_SESSION["pdf"] = [
    "pdf_name" => $name,
    "id_in"=>$id_in
    ]
?>