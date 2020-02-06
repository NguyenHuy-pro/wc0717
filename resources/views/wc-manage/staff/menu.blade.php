<?php
/**
 * Created by PhpStorm.
 * User: HUY
 * Date: 8/19/2016
 * Time: 10:10 PM
 */
?>
<div class="row">
    <nav class="navbar navbar-default navbar-static-top wc-margin-padding-none" role="navigation">
        <div class="container-fluid wc-padding-lef-none">
            <div class="navbar-header ">
                <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left ">

                    {{--========== ========== Label of page ========== ==========--}}
                    <li class="dropdown ">
                        <a href="#" class="wc-bg-5 wc-color-white wc-font-bold">
                            Staff
                        </a>
                    </li>

                    {{--========== ========== ADDRESS =========== =========--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle wc-link" data-toggle="dropdown">
                            Organization <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu wc-padding-none">
                            <li>
                                <a href="{!! route('wc.m.staff.department.list.get') !!}">Department</a>
                            </li>
                        </ul>
                    </li>

                    {{--================= CONTENT ==================--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle wc-link" data-toggle="dropdown">
                            Content <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu wc-padding-none">
                            <li>
                                <a href="#">Staff</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{--================== To back panel ====================--}}
                <ul class="nav navbar-nav navbar-right ">
                    <li class="dropdown">
                        <a class="wc-link" href="{!! route('wc.m.panel') !!}">Panel</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>