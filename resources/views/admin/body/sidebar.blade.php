<aside class="left-sidebar" data-sidebarbg="skin5">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
        <ul id="sidebarnav" class="pt-4">
          <li class="sidebar-item">
            <a
              class="sidebar-link waves-effect waves-dark sidebar-link"
              href="{{url('/admin/home')}}"
              aria-expanded="false"
              ><i class="mdi mdi-view-dashboard"></i
              ><span class="hide-menu">Dashboard</span></a
            >
          </li>




          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Slider </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="{{route('add.slider')}}" class="sidebar-link"
                  ><i class="mdi mdi-note-outline"></i
                  ><span class="hide-menu"> Add Slider </span></a
                >
              </li>
              <li class="sidebar-item">
                <a href="{{route('view.slider')}}" class="sidebar-link"
                  ><i class="mdi mdi-note-plus"></i
                  ><span class="hide-menu"> View Slider </span></a
                >
              </li>
            </ul>
          </li>



          <li class="sidebar-item">
            <a
              class="sidebar-link has-arrow waves-effect waves-dark"
              href="javascript:void(0)"
              aria-expanded="false"
              ><i class="mdi mdi-receipt"></i
              ><span class="hide-menu">Class </span></a
            >
            <ul aria-expanded="false" class="collapse first-level">

              <li class="sidebar-item">
                <a href="{{route('view.class')}}" class="sidebar-link"
                  ><i class="mdi mdi-note-plus"></i
                  ><span class="hide-menu"> View Class </span></a
                >
              </li>

              <li class="sidebar-item">
                <a href="{{route('view.section')}}" class="sidebar-link"
                  ><i class="mdi mdi-note-plus"></i
                  ><span class="hide-menu"> View Section </span></a
                >
              </li>
            </ul>
          </li>







        </ul>
      </nav>
      <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
  </aside>
