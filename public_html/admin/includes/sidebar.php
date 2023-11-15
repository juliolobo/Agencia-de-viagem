
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=$patch?>dist/img/EmbarqueIdealLogo.png" alt="Embarque Ideal Logo" class="brand-image">
      <span class="brand-text font-weight-light"><b>Embarque</b> Ideal</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

        <?php
            foreach($arrMenu as $idMenu => $ddMenu):
                if($ddMenu['nivel'] == 2):
                    $multiplo[$ddMenu['pai']][$idMenu] = $ddMenu;
                endif;

                if(!$ddMenu['multiplo'] && $ddMenu['nivel'] == 1):
        ?>
            <li class="nav-item">
                <a href="<?=$urlBase?>/<?=$ddMenu['arquivo']?>" class="nav-link <?=$pg==$ddMenu['arquivo'] ? 'active' : ''?>">
                    <i class="nav-icon <?=$ddMenu['icone']?>"></i>
                    <p>
                        <?=$ddMenu['nome']?>
                        
                        <?=$ddMenu['novo'] ? '<span class="right badge badge-danger">Novo</span>' : ''?>
                    </p>
                </a>
            </li>
        <?php elseif($ddMenu['multiplo'] && $ddMenu['nivel'] == 1): ?>
            <li class="nav-item <?=array_search($pg, array_column($multiplo[$idMenu], 'arquivo')) !== false ? 'menu-is-opening menu-open' : ''?>">
                <a href="#" class="nav-link <?=array_search($pg, array_column($multiplo[$idMenu], 'arquivo')) !== false ? 'active' : ''?>">
                    <i class="nav-icon <?=$ddMenu['icone']?>"></i>
                    <p>
                        <?=$ddMenu['nome']?>
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview" <?=array_search($pg, array_column($multiplo[$idMenu], 'arquivo')) !== false ? 'style="display: block;"' : 'style="display: none;"'?>>
                  <?php foreach($multiplo[$idMenu] as $ddMulti): ?>    
                    <li class="nav-item">
                        <a href="<?=$urlBase?>/<?=$ddMulti['arquivo']?>" class="nav-link <?=$pg==$ddMulti['arquivo'] ? 'active' : ''?>">
                            <i class="far fa-circle nav-icon"></i>
                            <p><?=$ddMulti['nome']?></p>
                        </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
            </li>
        <?php
                endif;
            endforeach;
        ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>