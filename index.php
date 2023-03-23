<?php
include_once "./Controllers/MainController.php";
include_once "./Controllers/CategoryProductController.php";
include_once "./Controllers/ProductController.php";


// include "./Views/admin/layouts/header.php";
// controller
if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'admin_categories':
            categoriesControl();
            break;

        case 'admin_categories_create':
            createCategoryControl();
            break;

        case 'admin_categories_delete':
            deleteCategoryControl();
            break;

        case 'admin_categories_edit':
            editCategoryControl();
            break;

        case 'admin_categories_update':
            updateCategoryControl();
            break;

            // case 'admin_categories_detail':
            //     detailCategoryAdminControl();
            //     break;

        case 'admin_products':
            productsControl();
            break;

        case 'admin_products_create':
            createProductControl();
            break;

        case 'admin_products_delete':
            deleteProductControl();
            break;

        case 'admin_products_edit':
            editProductControl();
            break;

        case 'admin_products_update':
            updateProductControl();
            break;

            // case 'admin_products_detail':
            //     detailProductAdminControl();
            //     break;
        case 'test':
            break;




        case '':
            homeUserController();
            break;

        case 'products':
            productUserController();
            break;

        case 'statistical':
            break;






            // case 'add_category':
            //     include "category/add.php";
            //     break;
        default:
            include "./Views/errors/error404.php";
            break;
    }
} else {
    include "./Views/user/layouts/header.php";
    include "./Views/user/home.php";
    // sau thay bằng user
    include "./Views/user/layouts/footer.php";
}

// include "./Views/admin/layouts/footer.php";
