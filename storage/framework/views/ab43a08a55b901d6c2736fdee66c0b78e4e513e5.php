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
                        <h4 class="card-title">Fikr-mulohaza Formasi</h4>
                        <p class="card-description">Fikr-mulohaza ma'lumotlarini qo'shing</p>
                        <form action="<?php echo e(route('testimonial.store')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="reviewname">Ism</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewname"
                                    name="reviewname"
                                    placeholder="Mijozning ismini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewbio">Bio</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewbio"
                                    name="reviewbio"
                                    placeholder="Mijozning bio ma'lumotlarini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewrating">Reyting</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="reviewrating"
                                    name="reviewrating"
                                    placeholder="Reytingni kiriting (2 o'nlikgacha)"
                                    pattern="[0-9]+([\.,][0-9]+)?"
                                    step="0.01"
                                    repuired
                                />
                            </div>

                            <div class="form-group">
                                <label>Rasm yuklash</label>
                                <div class="input-group col-xs-12">
                                    <input
                                        type="file"
                                        class="form-control file-upload-info"
                                        placeholder="Fikr-mulohaza rasmini yuklang"
                                        id="reviewimage"
                                        name="reviewimage"
                                        required
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempreviewimage" src="#" alt="vaqtinchalik-yuklangan-rasm" class="h-auto shadow-sm w-1/2" style="display: none" />
                            </div>

                            <div class="form-group">
                                <label for="reviewtext">Fikr-mulohaza</label>
                                <textarea
                                    class="form-control"
                                    id="reviewtext"
                                    name="reviewtext"
                                    rows="4"
                                    required
                                    placeholder="Mijozning fikr-mulohazasini kiriting"
                                ></textarea>
                            </div>

                            <?php if($isAdmin === true): ?>
                                <button type="submit" class="btn btn-primary mr-2">Qo'shish</button>
                            <?php else: ?>
                                <button onclick="alert('Faqat admin fikr-mulohaza qo\'shishi mumkin')" type="button" class="btn btn-primary mr-2">Qo'shish</button>
                            <?php endif; ?>
                            <a href="<?php echo e(route("testimonial.index")); ?>" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var imgInput = document.getElementById("reviewimage");
        imgInput.addEventListener('change', (event) => {
            if (event.target.files[0]) {
                var reader = new FileReader();

                var imgTemp = document.getElementById("tempreviewimage");
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
<?php /**PATH C:\Users\Admin\PhpstormProjects\restaurant-site-laravel\resources\views/admin/pages/review/createreview.blade.php ENDPATH**/ ?>