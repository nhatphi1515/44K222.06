<div class="content-wrapper" style="min-height: 1203.6px;">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Danh sách sản phẩm</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Danh sách sản phẩm</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="col-12">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <?php  
                                    if (isset($_SESSION['thongbao'])) {?>
                                        <div class="form-group alert alert-primary">
                                            <?=$_SESSION['thongbao']?>
                                            <?php unset($_SESSION['thongbao']); ?>
                                        </div>
                                    <?php }
                                ?>
                                <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">STT</th>
                                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Tên sản phẩm</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Sửa</th>
                                            <th style="text-align: center;" class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Xóa</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody id="product">
                                        <?php
                                            $stt = 0;
                                            foreach ($dataproduct as $product) {?>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1"><?=++$stt?></td>
                                                    <td><?=$product['name']?></td>
                                                    <td style="text-align: center;">
                                                        <span class="badge bg-primary">
                                                            <a href="?controller=updateproduct&id=<?=$product['id']?>">
                                                                <ion-icon name="create-outline"></ion-icon>
                                                            </a>
                                                        </span>
                                                        
                                                    </td>
                                                    <td style="text-align: center;">
                                                        <span class="badge bg-danger">
                                                            <a href="javascript:;" data-id="<?=$product['id']?>"  id="del">
                                                                <ion-icon name="trash-outline"></ion-icon>
                                                            </a>
                                                        </span>
                                                    </td>
                                                </tr>
                                            <?php }
                                        ?>
                                    </tbody>
                                   
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).on('click','#del',function(){
            var id = $(this).attr('data-id');
            $.ajax({
                url: '?controller=delproduct',
                method:"POST",
                cache: false,
                data:{id:id},
                success:function(data){
                $(this).closest('tr').remove();
                }
            });
        });
</script>
