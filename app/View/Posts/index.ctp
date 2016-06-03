<!--一覧のアクション-->

<h1>Blog posts</h1>
<?php echo $this->Html->link(
    'Add Post',
    array('controller' => 'posts', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>あいでぃーーーーーーー</th>
        <th>タイトル</th>
        <th>あくしょん</th>
        <th>くりえいと</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php 
                echo $this->Html->link(
                    $post['Post']['title'], 
                    array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <!-- ここから -->
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Post']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $post['Post']['id'])
                );
            ?>
        </td>
        <!-- ここまで追加 -->
        <td><?php echo $post['Post']['created']; ?></td>
    </tr>
    
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
