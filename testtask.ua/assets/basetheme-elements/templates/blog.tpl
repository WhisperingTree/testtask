[[$meta]]
[[$header]]

<div class="main">
	<div class="wrap">
		<div class="project">
			<div class="cont span_2_of_3">


				<div id="pdopage">
					<div class="rows">
		
						[[!pdoPage@MyPagingParams?
							&elementClass=`modSnippet`
							&element=`pdoResources`
							&showHidden=`1`
							&includeContent=`1`
							&includeTVs=`mainArticleImage`
							&processTVs=`1`
							
							&tpl=`articleBlogPreviewTpl`
							&limit=`2`
							&debug=`0`
							&pageLimit=`99`
							&cacheTime=`1800`
							&maxLimit=`3`
							&ajaxMode=`default`
							&pageNavVar=`page.nav`
						]]
		
					</div>
					[[!+page.nav]]
				</div>
			</div>
		
			[[$sidebar]] 
			<div class="clear"></div>
		</div>
	</div>
</div>
[[$footer]]