<div id="section-projects" class="column_three">
    <div id="projects-content" class="section-projects w-100 mt-0 p-1 overflow-hidden">
        <h2 class="section-projects__title ui heading size-headinglg">
            <span class="section-projects__title-span-1">O<span class="section-projects__title-span">ur
                    Latest<br>Projects&nbsp;</span></span>
        </h2>
        
        <div class="projects-content">
            <ul class="nav nav-pills section-projects__content mb-3" id="pills-tab" role="tablist">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="nav-item" role="presentation">
                        <button
                            class="position-relative nav-link <?php echo e($loop->first ? 'active' : ''); ?> text-decoration-none section__tab-item"
                            id="pills-<?php echo e($category->id); ?>-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-<?php echo e($category->id); ?>" type="button" role="tab"
                            aria-controls="pills-<?php echo e($category->id); ?>" aria-selected="false" tabindex="0"
                            style="cursor: pointer" onclick="loadProjects(<?php echo e($category->id); ?>)">
                            <div class="circle position-absolute start-0 z-0"></div>
                            <div class="position-relative text z-1 text-white">
                                <?php echo e($category->name); ?>

                            </div>
                        </button>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="projects-list" role="tabpanel"
                    aria-labelledby="projects-list-tab">
                    <!-- Projects will be loaded here dynamically -->
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fetch data for the first category initially
            <?php if($categories->isNotEmpty()): ?>
                loadProjects(<?php echo e($categories->first()->id); ?>);
            <?php endif; ?>
        });

        function loadProjects(categoryId) {
            fetch(`/projects/category/${categoryId}`)
                .then(response => response.json())
                .then(data => {
                    console.log('Fetched data:', data); // Log the fetched data

                    let projectsList = document.getElementById('projects-list');
                    projectsList.innerHTML = '';

                    baseUrl = "<?php echo e(url('/')); ?>";
                    let counter = 1; // Initialize a counter
                    let row = document.createElement('div');
                    row.classList.add('row');
                    row.classList.add('w-100');
                    row.classList.add('m-auto');

                    data.forEach((project, index) => {
                        let projectItem = `
                        <div class="col-md-4 mt-4 ${index % 2 != 0 ? 'p-4' : ''}"> <!-- Adjusted column class and margin bottom -->
                            <div onclick="window.location.href = '/projects/${project.slug}'" class="service">
                                <div class="service-header d-flex justify-content-between">
                                    <div class="service-number">
                                        <p>${counter}</p>
                                    </div>
                                    <div class="category-name">
                                        <p class="user-profile__role ui text size-texts ${index % 2 != 0 ? 'me-4' : ''}">
                                            ${project.title}
                                        </p>
                                    </div>
                                </div>
                                <div class="service__image ${index % 2 != 0 ? 'text-center' : ''}">
                                    <img src="${baseUrl}/storage/app/${project.cover}" alt="image"> <!-- Assuming project.cover is the URL -->
                                </div>
                                <div class="service-title mt-4">
                                    ${project.client}
                                </div>
                            </div>
                        </div>
                        `;

                        // Append projectItem to row
                        row.innerHTML += projectItem;
                        counter++; // Increment the counter

                        // Append row to projectsList after every 3 items (for 3 columns in a row)
                        if (counter % 3 === 1) {
                            projectsList.appendChild(row);
                            row = document.createElement('div');
                            row.classList.add('row');
                        }
                    });

                    // Append the last row if it's not already added
                    if (data.length % 3 !== 0) {
                        projectsList.appendChild(row);
                    }
                })
                .catch(error => {
                    console.error('Error fetching projects:', error); // Log any errors
                });
        }

        // Ensure that loadProjects is available globally
        window.loadProjects = loadProjects;
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH G:\xampp\htdocs\Dashboard_Project\resources\views/front/projects-section/projects.blade.php ENDPATH**/ ?>