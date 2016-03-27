    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              Applications<span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li>
                <a href="{{ route('admin.access.applications.index') }}">Active Applications</a>
                <a href="{{ route('admin.access.applications.index_declined') }}">Declined Applications</a>
                <a href="{{ route('admin.access.applications.index_accepted') }}">Accepted Applications</a>
            </li>
          </ul>
        </div><!--btn group-->
    </div><!--pull right-->

    <div class="clearfix"></div>
