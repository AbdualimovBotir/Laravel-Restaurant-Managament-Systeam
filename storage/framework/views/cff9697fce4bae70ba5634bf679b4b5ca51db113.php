<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Ovqat-Menyu Formasi</h4>
                        <p class="card-description">Ovqat menyusi ma'lumotlarini qo'shing</p>
                        <form action="<?php echo e(route('foodmenu.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="productname">Nomi</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="productname"
                                    name="productname"
                                    placeholder="Mahsulot nomini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="productprice">Narxi</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="productprice"
                                    name="productprice"
                                    placeholder="Mahsulot narxini 2 xonali kasr bilan kiriting"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label>Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Mahsulot rasmini yuklang"
                                        id="productimage"
                                        name="productimage"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempproductimage" src="#" alt="vaqtinchalik-yuklangan-rasm" class="h-auto shadow-sm w-1/2" style="display: none" />
                            </div>

                            <div class="form-group">
                                <label for="productdescription">Tavsifi</label>
                                <textarea
                                    class="form-control"
                                    id="productdescription"
                                    name="productdescription"
                                    rows="4"
                                    required
                                    placeholder="Mahsulot tavsifini kiriting"
                                ></textarea>
                            </div>

                            <?php if($isAdmin === true): ?>
                                <button type="submit" class="btn btn-primary mr-2">Qo'shish</button>
                            <?php else: ?>
                                <button onclick="alert('Faqat admin ovqat menyusini qo\'shishi mumkin')" type="button" class="btn btn-primary mr-2">Qo'shish</button>
                            <?php endif; ?>
                            <a href="<?php echo e(route("foodmenu.index")); ?>" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imgInput = document.getElementById("productimage");
        imgInput.addEventListener('change', (event) => {
            if (event.target.files[0]) {
                var reader = new FileReader();

                var imgTemp = document.getElementById("tempproductimage");
                reader.onload = function (e) {
                    imgTemp.setAttribute("src", e.target.result);
                }

                reader.readAsDataURL(event.target.files[0]);

                if (imgTemp.style.display === "inline") {
                    imgTemp.style.display = "block";
                } else {
                    imgTemp.style.display = "inline";
                }
            }
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Admin\PhpstormProjects\restaurant-site-laravel\resources\views/admin/pages/foodmenu/createfoodmenu.blade.php ENDPATH**/ ?>