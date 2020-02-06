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

                    {{--======== ======== Label of page ======== ========--}}
                    <li class="dropdown ">
                        <a href="#" class="wc-bg-5 wc-color-white wc-font-bold">
                            System
                        </a>
                    </li>

                    {{--========== ========== ADDRESS =========== =========--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle wc-link" data-toggle="dropdown">
                            Address <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu wc-padding-none">
                            <li>
                                <a href="{!! route('wc.m.system.country.list.get') !!}">
                                    Country
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('wc.m.system.provinceType.list.get') !!}">
                                    Province type
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('wc.m.system.province.list.get') !!}">
                                    Province
                                </a>
                            </li>
                            <li>
                                <a href="{!! route('wc.m.system.district.list.get') !!}">
                                    District
                                </a>
                            </li>
                        </ul>
                    </li>

                    {{--========= ======== introduction ========== ========--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle wc-link" data-toggle="dropdown">
                            Introduction <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu wc-padding-none">
                            <li>
                                <a href="#">About</a>
                            </li>
                        </ul>
                    </li>

                    {{--========= ======== CONTENT ========= =======--}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle wc-link" data-toggle="dropdown">
                            content<span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu wc-padding-none">
                            <li>
                                <a href="#">Bad info</a>
                            </li>
                            <li class="tf-border-top">
                                <a href="#">Relation</a>
                            </li>
                        </ul>
                    </li>
                </ul>

                {{--========= ========= To back panel ========== ==========--}}
                <ul class="nav navbar-nav navbar-right ">
                    <li class="dropdown">
                        <a class="wc-link" href="{!! route('wc.m.panel') !!}">Panel</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</div>