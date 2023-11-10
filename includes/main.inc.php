<div class="grid gap-0 row-gap-3">
    <div class="p-2 g-col-12">
        <div class="card">
            <div class="card-body">
                <h1><span class="logo"><i class="bi bi-people-fill"></i></span></a> StudentDB</h1>
            </div>
        </div>
    </div>
    <div class="p-2 g-col-12">
        <div class="card">
            <div class="card-body">
                <form name="convertForm" id="convertForm" method="POST">
                    <div class="row mb-3 gy-2">
                        <div class="col-sm-12 col-md-6">
                            <input name="student_name" id="student_name" type="text"
                                class="form-control form-control-lg" placeholder="Name" required>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <input name="student_surname" id="student_surname" type="text"
                                class="form-control form-control-lg" placeholder="Surname" required>
                        </div>
                    </div>
                    <div class="row mb-3 gy-2">
                        <div class="col-sm-12 col-md-6">
                            <input name="student_grade" id="student_grade" type="number" step="any" min="0" max="100"
                                class="form-control form-control-lg" placeholder="Grade" required>
                        </div>
                    </div>
                    <div class="row mb-3 gy-2">
                        <div class="col-sm-12 col-md-6">
                            <input type="hidden" name="action" id="action" value="add">
                            <input class="btn btn-primary btn-lg" type="submit" value="Add">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <div class="p-2 g-col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><a href="index.php?action=sort&sortBy=id">ID</a></th>
                                <th><a href="index.php?action=sort&sortBy=name">Name</a></th>
                                <th><a href="index.php?action=sort&sortBy=surname">Surname</a></th>
                                <th><a href="index.php?action=sort&sortBy=grade">Grade</a></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // TODO Show results here
                            ?>
                        </tbody>
                </div>
            </div>
        </div>

</div>