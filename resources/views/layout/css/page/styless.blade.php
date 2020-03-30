<style>
    /* start main */
    .main {
        margin: 15px 0;
    }

    .sidebar {
        float: left;
        width: 26.33333%;
    }

    .sidebar1 {
        float: left;
        width: 28.5%;
    }

    .content {
        float: left;
        width: 43.8%;
        margin-left: 1.3%;
    }

    /* start sidebar */
    /*sidebar_grid*/
    .sidebar_grid {
        background: #c5cdd0;
        padding: 8%;
    }

    .grid_s {
        margin-top: 13px;
    }

    .grid_s1 {
        margin: 35px 0;
    }

    .grid_img {
        float: left;
        width: 14.333%;
        margin-right: 3%;
    }

    .grid_img i {
        width: 32px;
        height: 32px;
        display: block;
        background: url('../images/sprite.png') no-repeat;
    }

    .grid_img i.phone {
        background-position: -228px -154px;
    }

    .grid_img i.location {
        background-position: -228px -194px;
    }

    .grid_img i.mail {
        background-position: -225px -233px;
    }

    .grid_text {
        float: left;
        width: 82.333%;
    }

    .grid_text p {
        font-size: 1em;
        color: #ffffff;
        padding: 2px 0;
    }

    .grid_text p a {
        color: #ffffff;
        -webkit-transition: all 0.5s ease-in-out;
        -moz-transition: all 0.5s ease-in-out;
        -o-transition: all 0.5s ease-in-out;
        transition: all 0.5s ease-in-out;
    }

    .grid_text p a:hover {
        color: #152840;
    }

    /* end sidebar */
    /*start menu_box_list */
    .menu_box_list {
        background: #ffffff;
    }

    .menu_box_list li a {
        display: block;
        color: #464f54;
        font-size: 1em;
        border-bottom: 1px solid #dddddd;
        padding: 14px 30px;
        -webkit-transition: 0.5s linear;
        -moz-transition: 0.5s linear;
        -o-transition: 0.5s linear;
        -ms-transition: 0.5s linear;
        transition: 0.5s linear;
    }

    .menu_box_list li a>i {
        width: 30px;
        height: 30px;
        display: inline-block;
        background: url(../images/sprite.png) no-repeat;
        vertical-align: middle;
        transition: none;
    }

    .menu_box_list li a:hover>i {
        background: url(../images/sprite.png) no-repeat;
    }

    .menu_box_list li a:hover,
    .menu_box_list li.active a {
        color: #ffffff;
        background-color: #56CCC8;
    }

    .menu_box_list li a span {
        padding-left: 15px;
    }

    .menu_box_list li a>i.home {
        background-position: 0px 0px;
    }

    .menu_box_list li a:hover>i.home {
        background-position: -40px 0px;
    }

    .menu_box_list li a>i.store {
        background-position: 0px -42px;
    }

    .menu_box_list li a:hover>i.store {
        background-position: -40px -42px;
    }

    .menu_box_list li a>i.blog {
        background-position: 0px -82px;
    }

    .menu_box_list li a:hover>i.blog,
    .menu_box_list li.active a>i.blog {
        background-position: -40px -82px;
    }

    .menu_box_list li a>i.community {
        background-position: 0px -120px;
    }

    .menu_box_list li a:hover>i.community {
        background-position: -40px -120px;
    }

    .menu_box_list li a>i.contest {
        background-position: 0px -156px;
    }

    .menu_box_list li a:hover>i.contest {
        background-position: -40px -156px;
    }

    .menu_box_list li a>i.about {
        background-position: 0px -197px;
    }

    .menu_box_list li a:hover>i.about {
        background-position: -40px -197px;
    }

    .menu_box_list li a>i.contact {
        background-position: 0px -236px;
    }

    .menu_box_list li a:hover>i.contact {
        background-position: -40px -236px;
    }

    /* end menu_box_list */
    /* start search*/
    .soc_right {
        position: relative;
        width: 15.3333%;
        float: right;
    }

    /* end search*/
</style>