 <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
     <div class="container-xxl d-flex h-100">
         <ul class="menu-inner pb-2 pb-xl-0">
             <!-- Dashboards -->
             <li class="menu-item active">
                 <a href="{{ route('home') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-smart-home"></i>
                     <div data-i18n="Dashboards">Dashboards</div>
                 </a>
             </li>

             <!-- Legal Opini -->
             <li class="menu-item">
                 <a href="{{ route('legal_opini.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-layout-sidebar"></i>
                     <div data-i18n="Legal Opini">Legal Opini</div>
                 </a>
             </li>

             <!-- Legal Patnership -->
             <li class="menu-item">
                 <a href="{{ route('legal_patnership.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-layout-grid-add"></i>
                     <div data-i18n="Legal Patnership">Legal Patnership</div>
                 </a>
             </li>

             <!-- Jurnal -->
             <li class="menu-item">
                 <a href="{{ route('jurnal.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-file"></i>

                     <div data-i18n="Jurnal">Jurnal</div>
                 </a>
             </li>

             <!-- Galery -->
             <li class="menu-item">
                 <a href="{{ route('galery.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-file"></i>

                     <div >Galery</div>
                 </a>
             </li>

             <li class="menu-item">
                 <a href="{{ route('reviews.index') }}" class="menu-link">
                     <i class="menu-icon tf-icons ti ti-file"></i>

                     <div data-i18n="Reviews">Reviews</div>
                 </a>
             </li>
         </ul>
     </div>
 </aside>
