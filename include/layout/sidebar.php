<!-- Sidebar -->
<div id="wrapper">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="./index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <img src="./img/icon-phil.svg">
            </div>
            <div class="sidebar-brand-text mx-3">Ma Fabrique Du Café <sup>*</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="./index.php?page=home">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Mon Tableau de Bord</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./index.php?page=search_card">
                <i class="fas fa-fw fa-address-card"></i>
                <span>Les Cartes</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./index.php?page=create_card">
                <i class="fas fa-fw fa-archive"></i>
                <span>Créer une carte</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Gestion
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!--
        <li class="nav-item">
            <a class="nav-link collapsed" href="./index.php?page=search_card" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-address-card"></i>
                <span>Cartes El_Fidel</span>
            </a>
        -->
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gestion des clients :</h6>
                    <a class="collapse-item" href="./index.php?page=create_card">Créer une carte client</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-coffee"></i>
                <span>Produits</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Gestion des produits:</h6>
                    <a class="collapse-item" href="./index.php?page=sell">Vente d'un produit</a>
                    <a class="collapse-item" href="./index.php?page=consult">Consulter stock</a>
                    <a class="collapse-item" href="./index.php?page=order">Commandes</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Administration:</h6>
                    <a class="collapse-item" href="./index.php?page=all_cards">Tous les clients</a>
                    <a class="collapse-item" href="./index.php?page=all_products">Tous les produits</a>
                    <a class="collapse-item" href="./index.php?page=all_orders">Toutes les commandes</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Autre:</h6>
                    <a class="collapse-item" href="./index.php?page=emergency">Toutes les urgences</a>
                    <a class="collapse-item" href="./index.php?page=message">Tous les messages</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="./index.php?page=graphs">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Graphiques</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="./index.php?page=tables">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->
