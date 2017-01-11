<style media="screen">
  img {
    max-width: 100%;
    max-height:inherit;
  }

  a.plink {
    text-derocarion: none;
    color: inherit;
  }

  .custom-select {
    width: 100%;
  }
</style>
<div class="col-md-12" style="margin-bottom: 1em;">
  <form class="" action="<?=base_url('Product/list')?>" method="post">
    <div class="form-group col-md-3">
      <label for="">종류</label>
      <select class="custom-select" name="type" onchange="this.form.submit()">
      <?php foreach($type as $k => $row) : ?>
        <option value = "<?=$row['type_id']?>" <?php if($sel_type == $row['type_id']) echo 'selected'?>><?=$row['type_desc']?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">스타일</label>
      <select class="custom-select" name="style" onchange="this.form.submit()">
      <?php foreach($style as $k => $row) : ?>
        <option value = "<?=$row['style_id']?>" <?php if($sel_style == $row['style_id']) echo 'selected'?>><?=$row['style_desc']?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">쟝르</label>
      <select class="custom-select" name="genre" onchange="this.form.submit()">
      <?php foreach($genre as $k => $row) : ?>
        <option value = "<?=$row['genre_id']?>" <?php if($sel_genre == $row['genre_id']) echo 'selected'?>><?=$row['genre_desc']?></option>
      <?php endforeach; ?>
      </select>
    </div>
    <div class="form-group col-md-3">
      <label for="">컬러</label>
      <select class="custom-select" name="color" onchange="this.form.submit()">
      <?php foreach($color as $k => $row) : ?>
        <option value = "<?=$row['color_id']?>" <?php if($sel_color == $row['color_id']) echo 'selected'?>><?=$row['color_desc']?></option>
      <?php endforeach; ?>
      </select>
    </div>
  </form>
</div>
<div class="col-md-12" id="">
  <?php foreach($list as $k => $row) : ?>
  <div class="col-md-2">
    <div class="card text-xs-center">
      <a class="plink" href="<?=base_url('Product/detail/'.$row['product_name'])?>"><img class="card-img-top" src="<?=base_url('assets/img/product/'.$row['product_img'])?>" alt=""></a>
      <div class="card-block">
        <a class="plink" href="<?=base_url('Product/detail/'.$row['product_name'])?>"><h5 class="card-title"><?=$row['product_name']?></h5></a>
        <p class="card-text">재고 : <?=$row['product_count']?></p>
      </div>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<script type="text/javascript">

</script>