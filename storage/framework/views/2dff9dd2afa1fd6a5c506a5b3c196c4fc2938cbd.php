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
                        <h4 class="card-title">Testimonial Formasi</h4>
                        <p class="card-description">Testimonial ma'lumotlarini tahrirlash</p>
                        <form action="<?php echo e(route('testimonial.update', $data->id )); ?>" method="post" enctype="multipart/form-data">
                            <?php echo method_field('PUT'); ?>
                            <?php echo csrf_field(); ?>
                            <div class="form-group">
                                <label for="reviewname">Ism</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewname"
                                    name="reviewname"
                                    value="<?php echo e($data->name); ?>"
                                    placeholder="Mijozning ismini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewbio">Biografiya</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    id="reviewbio"
                                    name="reviewbio"
                                    value="<?php echo e($data->bio); ?>"
                                    placeholder="Mijozning biografiyasini kiriting"
                                    required
                                />
                            </div>

                            <div class="form-group">
                                <label for="reviewrating">Baholash</label>
                                <input
                                    type="number"
                                    class="form-control"
                                    id="reviewrating"
                                    name="reviewrating"
                                    value="<?php echo e($data->rating); ?>"
                                    placeholder="Bahoni 2 kasrgacha kiriting"
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
                                        placeholder="Sharh uchun rasmni yuklang"
                                        id="reviewimageupdate"
                                        name="reviewimage"
                                        value="<?php echo e($data->img); ?>"
                                    />
                                </div>
                            </div>
                            <div class="form-group">
                                <img id="tempreviewimageedit" src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="h-auto shadow-sm w-1/2" />
                            </div>

                            <div class="form-group">
                                <label for="reviewtext">Sharh</label>
                                <textarea
                                    class="form-control"
                                    id="reviewtext"
                                    name="reviewtext"
                                    rows="4"
                                    required
                                    placeholder="Mijozning sharhini kiriting"
                                ><?php echo e($data->review); ?></textarea>
                            </div>

                            <?php if($isAdmin === true): ?>
                                <button type="submit" class="btn btn-primary mr-2">Tahrirlash</button>
                            <?php else: ?>
                                <button onclick="alert('Faqat admin sharhni tahrirlashi mumkin')" type="button" class="btn btn-primary mr-2">Tahrirlash</button>
                            <?php endif; ?>
                            <a href="<?php echo e(route("testimonial.index")); ?>" class="btn btn-light">Bekor qilish</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        reviewimageupdate.onchange = evt => {
            const [file] = reviewimageupdate.files
            if (file) {
                tempreviewimageedit.src = URL.createObjectURL(file)
            }
        }
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Admin\PhpstormProjects\restaurant-site-laravel\resources\views/admin/pages/review/editreview.blade.php ENDPATH**/ ?>