<?php
// NDS
include_once("../../../../env/dns_warehouse.php");
// Si base de données en UTF-8, il faudra utiliser la fonction utf8_decode() pour tous les champs de texte à afficher

$id_out = $_POST["id"];

// extraction des données à afficher dans le sous-titre 
$requete = "SELECT * FROM flux_out WHERE id_out ='$id_out'";

$result = mysqli_query($dbc, $requete);
// tableau des résultats de la ligne
$flux = mysqli_fetch_array($result);
mysqli_free_result($result);

$services = $flux["services"];

$sql_affiche_services = "SELECT * FROM `services` WHERE `id_service` = '$services'";
                        
//On excute directement la requete
$requete_affiche_services= $db->query($sql_affiche_services);

//On recupere les donnees (fetch ou fetchall)
$affiche_services = $requete_affiche_services->fetch();
$services =$affiche_services["services_descriptions"];


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
  $this->ln(30);
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

$sql_1 = "SELECT `categories`,`id_abrev_code`,`created_date` , `id_out`, `descriptions`, `quantity_out` FROM `flux_out` WHERE id_out ='$id_out'";
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
$pdf->Cell(30,3,$flux['created_date'],0,1,'L',1);
$pdf->SetX(23);  
$pdf->Cell(30,3,$services,0,1,'L',1);  
$pdf->SetX(23);  
$pdf->Cell(30,3,strtoupper(('ID OUT:'.$flux['id_out'])),0,1,'L',1);
$pdf->SetX(23);  

$pdf->setFillColor(255,255,255);
$pdf->SetY(10);
$pdf->SetX(45);
// Cellule avec les données du sous-titre sur 2 lignes, pas de bordure mais couleur de fond grise
$pdf->Cell(30,3,strtoupper(('Order:'.$flux['orderer'])),0,1,'L',1);
$pdf->SetX(45);  
$pdf->Cell(30,3,strtoupper(('Resp:'.$flux['name_resp_storage'])),0,1,'L',1);  
$pdf->SetX(45);  
$pdf->ln(5);  

// Second table: specify 3 columns
$pdf->AddCol('descriptions',45,'Descriptions','L');
$pdf->AddCol('quantity_out',15,'Qt','C');
$prop = array('HeaderColor'=>array(255,255,255),
            'color1'=>array(255,255,255),
            'color2'=>array(255,255,255),
            'padding'=>2);
$pdf->Table($dbc,$sql_1,$prop);

$id_out = $flux['id_out'];

$name= $id_out . ".pdf";

//telecharger
$pdf->Output('F', "../../../../../warehouse_img/img/flux/output/$name"); 

$_SESSION["pdf"] = [
    "pdf_name" => $name,
    "id_out" => $id_out
    ]

?>