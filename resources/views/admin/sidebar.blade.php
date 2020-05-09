<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                    @foreach(Auth::user()->roles as $role)
                        <label class="badge badge-pill" style="background-color: #0a0a0a">{{ $role->name }}</label>
                    @endforeach
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu" data-widget="tree">

            <li class="treeview {{  Route::currentRouteName() == ('landClass.create') || Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show')
                                ||  Route::currentRouteName() == ('landType.create') || Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show')
                                ||  Route::currentRouteName() == ('texture.create') ||Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show')
                                ||  Route::currentRouteName() == ('cultivationType.create') ||Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show')
                                ||  Route::currentRouteName() == ('state.create') ||Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show')
                                    ? 'active' : '' }}">
                @can('configurationTag',\Illuminate\Support\Facades\Auth::user())
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Configuration</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                @endcan
                <ul class="treeview-menu">

                    {{--land class--}}
                        <li class="treeview {{  Route::currentRouteName() == ('landClass.create') || Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show') ? 'active' : '' }}">
                            @can('landClassTag',\Illuminate\Support\Facades\Auth::user())
                                <a href="#">
                                    <i class="fa fa-circle-o"></i> Land Class<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                                </a>
                            @endcan
                            <ul class="treeview-menu">
                                @can('landClass.create',\Illuminate\Support\Facades\Auth::user())
                                    <li class="{{  Route::currentRouteName() == ('landClass.create') ? 'active' : '' }}"><a href="{{route('landClass.create')}}"><i class="fa fa-circle-o"></i> Add Land Class</a></li>
                                @endcan
                                @can('landClassList',\Illuminate\Support\Facades\Auth::user())
                                    <li class="{{  Route::currentRouteName() == ('landClass.index') || Route::currentRouteName() == ('landClass.edit') || Route::currentRouteName() == ('landClass.show') ? 'active' : '' }}"><a href="{{route('landClass.index')}}"><i class="fa fa-circle-o"></i> Land Class List </a></li>
                                    @endcan
                            </ul>
                        </li>




                    <li class="treeview {{  Route::currentRouteName() == ('landType.create') || Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show') ? 'active' : '' }}">
                        @can('landTypeTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i> Land Type<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('landType.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('landType.create') ? 'active' : '' }}"><a href="{{route('landType.create')}}"><i class="fa fa-circle-o"></i> Add Land Type</a></li>
                            @endcan
                            @can('landTypeList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('landType.index') || Route::currentRouteName() == ('landType.edit') || Route::currentRouteName() == ('landType.show') ? 'active' : '' }}"><a href="{{route('landType.index')}}"><i class="fa fa-circle-o"></i> Land Type List</a></li>
                                @endcan
                        </ul>
                    </li>


                    <li class="treeview {{Route::currentRouteName() == ('texture.create') ||Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show') ? 'active' : '' }}">
                        @can('textureTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i> Texture<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('texture.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('texture.create') ? 'active' : '' }}"><a href="{{route('texture.create')}}"><i class="fa fa-circle-o"></i> Add Texture</a></li>
                            @endcan
                            @can('textureList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('texture.index') || Route::currentRouteName() == ('texture.edit') || Route::currentRouteName() == ('texture.show') ? 'active' : '' }}"><a href="{{route('texture.index')}}"><i class="fa fa-circle-o"></i> Texture List</a></li>
                                @endcan
                        </ul>
                    </li>



                    <li class="treeview {{Route::currentRouteName() == ('cultivationType.create') ||Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show') ? 'active' : '' }}">
                        @can('cultivationTypeTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i> Cultivation Type<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('cultivationType.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('cultivationType.create') ? 'active' : '' }}"><a href="{{route('cultivationType.create')}}"><i class="fa fa-circle-o"></i>Add Cultivation Type</a></li>
                            @endcan
                            @can('cultivationTypeList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('cultivationType.index') || Route::currentRouteName() == ('cultivationType.edit') || Route::currentRouteName() == ('cultivationType.show') ? 'active' : '' }}"><a href="{{route('cultivationType.index')}}"><i class="fa fa-circle-o"></i>Cultivation Type List</a></li>
                                @endcan
                        </ul>
                    </li>

                    <li class="treeview {{Route::currentRouteName() == ('state.create') ||Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show') ? 'active' : '' }}">
                        @can('stateTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i>  State<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('state.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('state.create') ? 'active' : '' }}"><a href="{{route('state.create')}}"><i class="fa fa-circle-o"></i>Add State</a></li>
                            @endcan
                            @can('stateTag',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('state.index') || Route::currentRouteName() == ('state.edit') || Route::currentRouteName() == ('state.show') ? 'active' : '' }}"><a href="{{route('state.index')}}"><i class="fa fa-circle-o"></i>State List</a></li>
                                @endcan
                        </ul>
                    </li>
                </ul>

            </li>

            <li class="treeview {{Route::currentRouteName() == ('soilNutrition.create') ||Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}">
                @can('propertiesTag',\Illuminate\Support\Facades\Auth::user())
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Properties</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                @endcan
                <ul class="treeview-menu">
                    <li class="treeview {{Route::currentRouteName() == ('soilNutrition.create') ||Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}">
                        @can('soilNutritionTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i> Soil Nutrition<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('soilNutrition.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('soilNutrition.create') ? 'active' : '' }}"><a href="{{route('soilNutrition.create')}}"><i class="fa fa-circle-o"></i> Add Soil Nutrition</a></li>
                            @endcan
                            @can('soilNutritionList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('soilNutrition.index') || Route::currentRouteName() == ('soilNutrition.edit') || Route::currentRouteName() == ('soilNutrition.show') ? 'active' : '' }}"><a href="{{route('soilNutrition.index')}}"><i class="fa fa-circle-o"></i> Soil Nutrition List </a></li>
                                @endcan
                        </ul>
                    </li>
                </ul>
            </li>


            <li class="treeview {{ Route::currentRouteName() == ('users.create') ||Route::currentRouteName() == ('users.index') || Route::currentRouteName() == ('users.edit')
                                || Route::currentRouteName() == ('roles.create') ||Route::currentRouteName() == ('roles.index') || Route::currentRouteName() == ('roles.edit')
                                    ? 'active' : '' }}">
                @can('settingsTag',\Illuminate\Support\Facades\Auth::user())
                    <a href="#">
                        <i class="fa fa-share"></i> <span>Settings</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                @endcan
                <ul class="treeview-menu">
                    <li class="treeview {{Route::currentRouteName() == ('users.create') ||Route::currentRouteName() == ('users.index') || Route::currentRouteName() == ('users.edit')  ? 'active' : '' }}">
                        @can('usersTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i>Users<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('users.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('users.create') ? 'active' : '' }}"><a href="{{route('users.create')}}"><i class="fa fa-circle-o"></i> Add User</a></li>
                            @endcan
                            @can('usersList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('users.index') || Route::currentRouteName() == ('users.edit') ? 'active' : '' }}"><a href="{{route('users.index')}}"><i class="fa fa-circle-o"></i> Users List </a></li>
                                @endcan
                        </ul>
                    </li>
                    <li class="treeview {{Route::currentRouteName() == ('roles.create') ||Route::currentRouteName() == ('roles.index') || Route::currentRouteName() == ('roles.edit')  ? 'active' : '' }}">
                        @can('rolesTag',\Illuminate\Support\Facades\Auth::user())
                            <a href="#">
                                <i class="fa fa-circle-o"></i>Roles<span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                            </a>
                        @endcan
                        <ul class="treeview-menu">
                            @can('roles.create',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('roles.create') ? 'active' : '' }}"><a href="{{route('roles.create')}}"><i class="fa fa-circle-o"></i> Add Role</a></li>
                            @endcan
                            @can('rolesList',\Illuminate\Support\Facades\Auth::user())
                                <li class="{{  Route::currentRouteName() == ('roles.index') || Route::currentRouteName() == ('roles.edit') ? 'active' : '' }}"><a href="{{route('roles.index')}}"><i class="fa fa-circle-o"></i> Roles List </a></li>
                                @endcan
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
