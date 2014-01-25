<ul id="actions">
    <h4>Task Actions</h4>  
    <li> <a href="<?php echo base_url(); ?>tasks/add/<?php echo $task->list_id; ?>">Add Task</a></li> 
    <li> <a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit Task</a></li> 
    <?php if($is_complete) : ?>
        <li> <a href="<?php echo base_url(); ?>tasks/mark_new/<?php echo $task->id; ?>">Mark New</a></li> 
    <?php else : ?>
        <li> <a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></li> 
    <?php endif; ?>
    <li> <a onclick="return confirm('Are you sure?')" href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->list_id; ?>/<?php echo $this->uri->segment(3); ?>">Delete Task</a></li>
</ul>
<h1><?php echo $task->task_name; ?></h1>
<ul id="info">
    <li>Created On: <strong><?php echo date("n-j-Y",strtotime($task->create_date)); ?></strong></li>

<?php if($task->is_complete == 0) : ?>
    <li>Status: <strong>Uncomplete</strong></li>
<?php else : ?>
    <li>Status: <strong>Completed</strong></li>
<?php endif; ?>

<li>Due Date: <strong><?php echo date("n-j-Y",strtotime($task->create_date)); ?></strong></li>
</ul><br />
<div style="max-width:500px;"><?php echo $task->task_body; ?></div>
<br /><hr />
<- Go Back to <a href="<?php echo base_url(); ?>lists/show/<?php echo $task->list_id; ?>"><?php echo $task->list_name; ?></a>

