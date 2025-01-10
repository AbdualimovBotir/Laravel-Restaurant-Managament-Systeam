<!-- resources/views/review/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center mb-4">User Reviews</h1>

    <!-- Success message if review is added -->
    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <!-- Review Form -->
    <form action="<?php echo e(route('review.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <textarea class="form-control" id="review" name="review" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="rating" class="form-label">Rating</label>
            <select class="form-select" id="rating" name="rating" required>
                <option value="1">1 - Poor</option>
                <option value="2">2 - Fair</option>
                <option value="3">3 - Good</option>
                <option value="4">4 - Very Good</option>
                <option value="5">5 - Excellent</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>

    <hr class="my-4">

    <h2 class="text-center mb-4">All Reviews</h2>

    <!-- Display reviews -->
    <div class="reviews-list">
        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="review-item mb-4">
                <div class="d-flex justify-content-between">
                    <h5><?php echo e($review->name); ?></h5>
                    <span class="badge bg-warning"><?php echo e($review->rating); ?> stars</span>
                </div>
                <p><?php echo e($review->review); ?></p>
                <small class="text-muted">Posted on: <?php echo e($review->created_at->format('M d, Y')); ?></small>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <!-- Pagination links -->
    <div class="d-flex justify-content-center">
        <?php echo e($reviews->links()); ?>

    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\Users\Admin\PhpstormProjects\restaurant-site-laravel\resources\views/review/index.blade.php ENDPATH**/ ?>