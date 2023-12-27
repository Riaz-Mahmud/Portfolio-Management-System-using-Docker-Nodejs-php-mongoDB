<?php
    $title = "Projects | Admin Dashboard";
    include_once '../admin/includes/header.php';
?>

<body>

    <?php
        include_once '../admin/includes/sidebar.php';
    ?>

    <div class="content">
        <div class="container">
            <div class="row mt-3">
                <!-- title -->
                <h2>Projects</h2>

                <div class="col-md-12 text-right" style="margin-bottom: 10px;">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProjectModal">
                        Add Project
                    </button>
                </div>
            </div>
            <div class="row projects-list" id="projects-list"></div>
        </div>
    </div>

    <!-- Add Project Modal -->
    <div class="modal fade" id="addProjectModal" tabindex="-1" role="dialog" aria-labelledby="addProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addProjectModalLabel">Add Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="addProjectForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <!-- Form to add a new project -->
                        <div class="form-group">
                            <label for="ProjectName">Project Name</label>
                            <input type="text" class="form-control" id="projectName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="ProjectTechStack">Project Tech Stack</label>
                            <input type="text" class="form-control" id="projectTechStack" name="techstack" required>
                        </div>
                        <div class="form-group">
                            <label for="ProjectDescription">Project Description</label>
                            <textarea class="form-control" id="projectDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ProjectPrice">Project link</label>
                            <input type="url" class="form-control" id="projectLink" name="link">
                        </div>
                        <div class="form-group">
                            <label for="ProjectImage">Project Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- add project modal end -->

    <!-- Edit Project Modal -->
    <div class="modal fade" id="EditProjectModal" tabindex="-1" role="dialog" aria-labelledby="EditProjectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="EditProjectModalLabel">Edit Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeEditProjectModal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editProjectForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <input id="editProjectId" name="editProjectId" type="hidden" value="">
                        <div class="form-group">
                            <label for="ProjectName">Project Name</label>
                            <input type="text" class="form-control" id="editProjectName" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="ProjectTechStack">Project Tech Stack</label>
                            <input type="text" class="form-control" id="editProjectTechStack" name="techstack" required>
                        </div>
                        <div class="form-group">
                            <label for="ProjectDescription">Project Description</label>
                            <textarea class="form-control" id="editProjectDescription" name="description" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="ProjectPrice">Project link</label>
                            <input type="url" class="form-control" id="editProjectLink" name="link">
                        </div>
                        <div class="form-group">
                            <label for="ProjectImage">Project Image</label>
                            <input type="file" class="form-control-file" id="image" name="image">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="closeEditProjectModal" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Edit Project</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- edit project modal end -->

    <?php
        include_once '../admin/includes/scripts.php';
        include_once '../admin/includes/projectScripts.php';
    ?>

</body>

<?php
    include_once '../admin/includes/footer.php';
?>