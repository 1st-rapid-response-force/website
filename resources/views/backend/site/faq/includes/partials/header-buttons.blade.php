    <div class="pull-right" style="margin-bottom:10px">
        <div class="btn-group">
          <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              FAQs<span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ route('admin.site.faq.index') }}">View all FAQs</a></li>

            @permission('create-faq')
                <li><a href="{{ route('admin.site.faq.create') }}">Create FAQ</a></li>
            @endauth

          </ul>
        </div><!--btn group-->
    </div><!--pull right-->

    <div class="clearfix"></div>
