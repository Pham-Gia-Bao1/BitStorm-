<?php
include("../View/Admin/Layout/SideBar.view.php");
include_once "../Model/AdminNewsModel.php";
require_once("../Database/database.php");

?>
<div class="main">
    <div class="p-3"></div>
    <ul class="nav nav-tabs">
        <li><a href="AdminNews">News</a></li>
        <li><a href="AdminVideo">Blog</a></li>
    </ul>
    <div class="p-3"></div>
    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-info btn-lg " data-toggle="modal" data-target="#myModal" style="margin-left: 20px;">Create</button>
    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form method="post" action="AdminNews">
                        <div class="form-group">
                            <label for="usr">Title</label>
                            <input type="text" class="form-control" id="usr" name="title">
                        </div>
                        <div class="form-group">
                            <label for="usr">Content</label>
                            <input type="text" class="form-control" id="usr" name="content">
                        </div>
                        <div class="form-group">
                            <label for="usr">Descriptions</label>
                            <input type="text" class="form-control" id="usr" name="descriptions">
                        </div>
                        <div class="form-group">
                            <label for="usr">Created_at</label>
                            <input type="text" class="form-control" id="usr" name="created_at">
                        </div>
                        <div class="form-group">
                            <label for="usr">Image</label>
                            <input type="text" class="form-control" id="usr" name="image_url">
                        </div>
                        <div class="form-group">
                            <label for="usr">Author</label>
                            <input type="text" class="form-control" id="usr" name="author_id">
                        </div>
                        <div class="form-group">
                            <label for="usr">Link</label>
                            <input type="text" class="form-control" id="usr" name="link">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="p-3"></div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>
                    <p>Id</p>
                </th>
                <th>
                    <p>Title</p>
                </th>
                <th>
                    <p>Content</p>
                </th>
                <th>
                    <p>Descriptions</p>
                </th>
                <th>
                    <p>Image</p>
                </th>
                <th>
                    <p>Author_id</p>
                </th>
                <th>
                    <p>Created_at</p>
                </th>
                <th>
                    <p>Link</p>
                </th>
                <th>
                    <p>Action</p>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($news as $new) : ?>
                <tr>
                    <td><?php echo $new['id'] ?></td>
                    <td><?php echo $new['title'] ?></td>
                    <td><?php echo $new['content'] ?></td>
                    <td><?php echo $new['descriptions'] ?></td>
                    <td><?php echo '<img src="' . $new['image_url'] . '" style= "height:100px;width:100px;">'; ?></td>
                    <td><?php echo $new['author_id'] ?></td>
                    <td><?php echo $new['created_at'] ?></td>
                    <td><?php echo $new['link'] ?></td>
                    <td>
                        <a href="AdminNews?id=<?php echo $new['id']; ?>"> <button data-toggle="modal" data-target="#updateModel1">Update</button></a>
                        <a href="AdminNews?id_delete=<?php echo $new['id']; ?>">
                            <button class="delete-button" data-toggle="modal" data-target="#deleteModel1">Delete</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?php

    ?>

</div>