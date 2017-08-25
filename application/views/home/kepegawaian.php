<div class="box">
  <div class="box-header">
  </div>
  <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No.</th>
          <th>Nama</th>
          <th>NIP</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kepegawaian as $kepegawaian_item ): ?>
          <tr>
            <td><?php echo $kepegawaian_item['id'] ?></td>
            <td><?php echo $kepegawaian_item['nama'] ?></td>
            <td><?php echo $kepegawaian_item['nip'] ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

</div>
