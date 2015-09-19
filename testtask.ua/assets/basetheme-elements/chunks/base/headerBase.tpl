[[*id:is=`[[++site_start]]`:then=`
    <span class="logo">
        <img src="[[++basetheme.design_url]]images/logo.png" alt="[[++site_name]]" class="site-logo">
    </span>
`:else=`
    <a href="[[++site_url]]" class="logo">
        <img src="[[++basetheme.design_url]]images/logo.png" alt="[[++site_name]]" class="site-logo">
    </a>
`]]
<ul class="nav">
    [[pdoMenu@mainMenu?
        &startId=`0`
        &tplParentRow=`@INLINE
        <li class="[[+classnames]]">
            <a href="[[+link]]" [[+attributes]]>[[+menutitle:htmlent]]</a>
            <ul>[[+wrapper]]</ul>
        </li>`
        &tplParentRowHere=`@INLINE
        <li class="[[+classnames]]">
            <span>[[+menutitle:htmlent]]</span>
            <ul>[[+wrapper]]</ul>
        </li>`
        &tplParentRowActive=`@INLINE
        <li class="[[+classnames]]">
            <a href="[[+link]]" [[+attributes]]>[[+menutitle:htmlent]]</a>
            <ul>[[+wrapper]]</ul>
        </li>`
        &tplHere=`@INLINE <li class="[[+classnames]]"><span>[[+menutitle:htmlent]]</span></li>`
        &tplOuter=`@INLINE [[+wrapper]]`
    ]]
</ul>