<?php

    include_once 'lib/smarty/libs/Smarty.class.php';

    class MaterialView {

        // Muestra la página de inicio
        function showHome($type = null, $msg = null){
            $smarty = new Smarty ();
            $smarty->display('front/templates/menu/header.tpl');
            $smarty->display('front/templates/menu/navbar.tpl');
            $smarty->assign('msg', $msg);
            $smarty->assign('type', $type);
            $smarty->display('front/templates/home/home.tpl');
            $smarty->display('front/templates/menu/footer.tpl');
        }

        /* Llama a la vista que muestra los materiales */
        function showMaterials($materials){
            $smarty = new Smarty ();
            $smarty->display('front/templates/menu/header.tpl');
            $smarty->display('front/templates/menu/navbar.tpl');
            $smarty->assign('materials', $materials);
            $smarty->display('front/templates/materials/materials.tpl');
            $smarty->display('front/templates/menu/footer.tpl');
        }
        
        /* Llama a la vista que muestra los materiales para la secretaria */
        function showMaterialsSecretary($materials){
            $smarty = new Smarty ();
            $smarty->display('front/templates/menu/header.tpl');
            $smarty->display('front/templates/menu/navbar.tpl');
            $smarty->assign('materials', $materials);
            $smarty->display('front/templates/materials/materialsSecretary.tpl');
            $smarty->display('front/templates/menu/footer.tpl');
        }

        /* Llama a la vista que muestra el formulario de material */
        function showMaterialForm($material = null){
            $smarty = new Smarty ();
            $smarty->display('front/templates/menu/header.tpl');
            $smarty->display('front/templates/menu/navbar.tpl');
            if($material !== null){
                $smarty->assign('material', $material);
            }
            $smarty->display('front/templates/materials/materialForm.tpl');
            $smarty->display('front/templates/menu/footer.tpl');
        }
    }