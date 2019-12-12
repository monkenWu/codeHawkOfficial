<section id="<?=$id?>" class="ts-block ts-separate-bg-element text-center" data-bg-image="assets/img/bg-pattern-dot.png" data-bg-size="inherit" data-bg-image-opacity=".1" data-bg-repeat="repeat" style="margin-bottom: 8.125rem;">
    <div class="container">
        <div class="ts-title">
            <h2><?=$lan["navName"]?></h2>
        </div>
        <div class="col-12">
            <table id="versionTable" class="table table-striped table-bordered min-tablet-l" width="100%" style="color: black;background-color:white; ">
                <thead>
                    <tr>
                        <th style="width:10%" class="desktop tablet-l tablet-p mobile-l mobile-p"><?=$lan["tableTitle"][0]?></th>
                        <th style="width:10%" class="desktop tablet-l tablet-p mobile-l mobile-p"><?=$lan["tableTitle"][1]?></th>
                        <th style="width:40%" class="desktop tablet-l tablet-p mobile-l "><?=$lan["tableTitle"][2]?></th>
                        <th style="width:20%" class="desktop tablet-l tablet-p "><?=$lan["tableTitle"][3]?></th>
                        <th style="width:10%" class="desktop"><?=$lan["tableTitle"][4]?></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td> </td>
                        <td> </td>
                        <td><a href="javascript:;"><div width="100%" height="100%" onclick="basic.openModal('news','key')">官方網站正式上線</div></a></td>
                        <td>2019/12/12 02:18:02</td>
                        <td> </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--end container-->
</section>
<script type="text/babel">
    basic.pushReady(function(){
        version.initTable();
    });
    var version = {
        table : $("#versionTable"),
        lanName : "<?=$lan["lanName"]?>",
        initTable : function(){
            this.table.DataTable({
				language : <?=json_encode($lan["dataTable"])?>,
				destroy : true,
				lengthChange : false,
				searching : true,
                responsive : true,
				info : false,
				// "ajax":{
                //     url:base_url('home/getNotice'),
                //     type:'POST'
                // }
			});
        }
    };
</script>