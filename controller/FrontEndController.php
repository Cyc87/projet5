<?php

namespace CYC\Projet5\controller\FrontEndController;


    function home(){
        
        include("view/home/home.php");
    }
    
    function crates(){

        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();       
        $readCratesProduct = $readManager->readCratesProduct();

    include("view/home/menu/menuHome/beautifullCrates/crates.php");
    }
    function castor()
    {
        
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readCastorProduct = $readManager->readCastorProduct();

        include("view/home/menu/menuHome/beautifullCrates/castor.php");
    }
    function etageres()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readEtagereProduct = $readManager->readEtagereProduct();

        include("view/home/menu/menuHome/beautifullCrates/etageres.php");
    }
    function chair()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readChairProduct = $readManager->readChairProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/chair.php");
    }
    function table()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readTableProduct = $readManager->readTableProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/table.php");
    }
    function chest()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readChestProduct = $readManager->readChestProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/chest.php");
    }
    function buffet()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readBuffetProduct = $readManager->readBuffetProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/buffet.php");
    }
    function cabinet()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readCabinetProduct = $readManager->readCabinetProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/cabinet.php");
    }
    function wall()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readWallProduct = $readManager->readWallProduct();

        include("view/home/menu/menuHome/beautifullFurnitures/wall.php");
    }
    function makeoverFurniture()
    {

        include("view/home/menu/menuHome/beautifullBenefit/makeoverFurniture.php");
    }
    function decorationBoard()
    {

        include("view/home/menu/menuHome/beautifullBenefit/decorationBoard.php");
    }
    function salePainting()
    {

        include("view/home/menu/menuHome/beautifullBenefit/salePainting.php");
    }
    function creativeAisles()
    {

        include("view/home/menu/menuHome/beautifullBenefit/creativeAisles.php");
    }
    function about()
    {

        include("view/home/menu/menuhome/beautifullStory/about.php");
    }
    function univers()
    {

        include("view/home/menu/menuHome/beautifullStory/univers.php");
    }
    function contact(){
        if(isset($_POST['sendMail'])){

            $name = htmlspecialchars($_POST['name']);
            $mail = htmlspecialchars($_POST['mail']);
            $content = htmlspecialchars($_POST['message']);

            if(!empty($_POST['name']) AND !empty($_POST['mail']) AND !empty($_POST['message'])){

                $to      = 'chenalcyril87@gmail.com';
                $subject = 'the subject';
                $message = $_POST['message'];
                    
                $headers = array(
                    'From' => 'chenalcyril87@gmail.com',
                    'Reply-To' => 'chenalcyril87@gmail.com',
                    'X-Mailer' => 'PHP/' . phpversion()
                );

                mail($to, $subject, $message, $headers); 
                
                
                $_SESSION['message'] = "Le message est bien envoyé ! ";
                $_SESSION['msg_type'] = "success";
                header('Location:index.php?action=contact');
                exit();
                
            }else{
                $_SESSION['message'] = "Tous les champs sont obligatoires ! ";
                $_SESSION['msg_type'] = "danger";
               
            }
        }
        include("view/home/menu/menuHome/beautifullStory/contact.php");
    }
    
    function beautifullCrates()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        $readCount = $readManager->countProduct();
        $readAllBeautifulCratesProduct = $readManager->readAllBeautifulCratesProduct();
        
        include("view/beautifullProject/beautifullCrates.php");
    }
    function beautifullWall()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        
      
        $readAllBeautifullWallProduct = $readManager->readAllBeautifullWallProduct();

        include("view/beautifullProject/beautifullWall.php");
    }
    function fineFurnishing()
    {
        $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
        
        $readAllFineFurnishingProduct = $readManager->readAllFineFurnishingProduct();

        include("view/beautifullProject/fineFurnishing.php");
    }
    function pageError(){
        
        include("view/pageError/pageError.php");
    }
    function search($readSearchProduct){
    
        if(isset($_POST['submitSearch'])){
        
            $search = htmlspecialchars($_POST['search']);

            if(isset($search) && !empty($search)){

                $readManager = new \CYC\Projet5\model\manager\ProductManager\ProductManager();
                $readSearchProduct = $readManager->readSearchProduct($search,$readSearchProduct);
            
            }else{
                $_SESSION['message'] = "Tous les champs sont obligatoires ! ";
                $_SESSION['msg_type'] = "danger";
            }
        }
    include("view/home/menu/menuHome/search.php");    
    }
    function legalNotice()
    {
        include("view/home/menu/menuHome/beautifullStory/legalNotice.php");
    }
    

?>