<?php
// File paths
//$root_path = "/var/www/html"; //use absolute path
$root_path = "/var/www/html/Chickpea10k"; //use absolute path
$egdb_files_folder = "chickpea10k";

$easy_gdb_path = "$root_path/easy_gdb";
$images_path = "/$egdb_files_folder/egdb_images";
$custom_text_path = "$root_path/$egdb_files_folder/egdb_custom_text";
$downloads_path = "downloads";
$annotations_path = "$root_path/annotations";
$blast_dbs_path = "$root_path/blast_dbs";
$lookup_path = "$root_path/lookup"; //from root 
$species_path = "$root_path/$egdb_files_folder/egdb_species";
$lab_path = "$root_path/$egdb_files_folder/egdb_labs";
$json_files_path = "$root_path/$egdb_files_folder/json_files";

// $annotation_links_path = "$root_path/$egdb_files_folder/annotations";
$vcf_path = "$root_path/vcf";

// Custom css file
// $custom_css = 1;
$custom_css_path = "$egdb_files_folder/css/chickpea10k.css";

//Expression
$expression_path = "$root_path/expression_data";
$private_expression_path = "$root_path/private_expression_data";

//Passport
$passport_path = "$root_path/passport/Chickpea_10K";
$phenotype_imgs_path = "$images_path/descriptors_imgs";


// Select 1 to store annotations in files or 0 to store annotations in a relational database
$file_database = 1;

// header
$dbTitle = "Chickpea 10K";
$header_img = "header_img.jpg";
$db_logo = "logo_10k.png";

// Toolbar
$tb_rm_home = 1;
$tb_about = 0;
$tb_downloads = 0;
$tb_species = 0;
$tb_search_box = 0;

$tb_tools = 0;
$tb_search = 1;
$tb_blast = 1;
$tb_jbrowse = 1;
$tb_seq_ext = 1;
$tb_annot_ext = 1;
$tb_gene_expr = 0;
$tb_lookup = 1;
$tb_enrichment = 0;
$tb_more = 0;
$tb_custom = 1;

//annotations file
//$jb_dataset = "chickpea";

// Expression Atlas
$expr_menu = 0;

// Expression tools order: 0 for not shown, >=1 to setup the order
$positions=[  
  'description' => 1,
  'cartoons' => 2,
  'lines' => 3,
  'cards' => 4,
  'heatmap' => 5,
  'replicates' => 6,
  'table' => 7
];

// Passport
$show_map = 1;
$show_qr = 1;

// About
$ab_citation = 1;
$ab_labs = 0;

//Gene examples
$gene_sample = "";
$input_gene_list="Ca_v2.0_00001.1
Ca_v2.0_00003.1
Ca_v2.0_00009.1";

// Tools
$max_lookup_input = 10000;
$max_extract_seq_input = 10000;
$max_blast_input = 20;
$max_expression_input = 15;
$max_annotation_input = 5000;


// BLAST
$blast_example=">protein_or_DNA
ATGAGTTGTGGGGAGGGATTTATGTCACCACAAATAGAGACTAAAGGAAGTGTTGGATTC
AAAGCGGGTGTTAAAGAGTACAAATTGATTTATTATACTCCTGAATACGAAACCAAAGAT
ACCGATATCTTGGTAACATTTCGAGTAACTCCTCAACCTGGAGTTTCGCCTGTAGAAGCA";

?>

