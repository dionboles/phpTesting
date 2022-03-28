<?php include("./header.php")?>
<form id="idForm" action="./addMaintenance.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6">
        <label for="">Select type of action</label>
        <select class="form-control form-control-lg" name="type">
            <option value="maintenance">Maintenance</option>
            <option value="repair">repair</option>
        </select>
    </div>
    <div class="form-group col-md-6">
      <label for="cost">Cost</label>
     <input type="number" class="form-control" id="cost" placeholder="Enter Cost" name="cost">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Enter Product</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Enter Product" name="Product">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Enter Date for Repair/Maintenance </label>
    <input type="date" class="form-control" id="inputAddress2" placeholder="Enter Date for Repair/Maintenance " name=" maintenance_Date">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Enter Order Number</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Enter Order Number" name="Order_Number">
</div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include("./footer.php")?>
<script>
$(document).ready(function(){
    $("form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var url = form.attr('action');

    $.ajax({
        type: "POST",
        url: url,
        data: form.serialize(), // serializes the form's elements.
        success: function(data)
        {
            alert(JSON.parse(data)); // show response from the php script.
            $("#form").trigger('reset');
        }
        });
    });
});
</script>