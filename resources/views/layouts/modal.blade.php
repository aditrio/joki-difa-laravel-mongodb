<!-- Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="form-edit" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                  <label for="kelas-edit">Mata Pelajaran</label>
                  <input type="text" class="form-control" id="kelas-edit"   name="kelas" placeholder="Mata Pelajaran">
                  
                </div>
                <div class="form-group">
                  <label for="nim">Tanggal</label>
                  <input type="date" name="tanggal" class="form-control" id="tanggal-edit"  placeholder="Tanggal">
                </div>
                
                
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal delete-->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="" id="form-delete" method="post">
                {{method_field('DELETE')}}
                @csrf
            <p>Data akan dihapus secara permanen</p>         
              
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
        </div>
      </div>
    </div>
  </div>


  <!-- Modal Nilai-->
<div class="modal fade" id="inputmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Input Nilai Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="" id="form-input" method="POST">
              @method('PUT')
              @csrf
              <div class="form-group">
                <label for="nama">nama</label>
                <input type="text" disabled class="form-control nama-input"  placeholder="Name">
                <input type="text" hidden class="nama-input" name="nama" value="">
              </div>
              <div class="form-group">
                <label for="nim">nim</label>
                <input type="text" disabled class="form-control nim-input"  placeholder="NIM">
                <input type="text" hidden class="nim-input" name="nim" value="">
              </div>

              <div class="form-group">
                <label for="nilai">nilai</label>
                <input type="text" name="nilai" class="form-control nilai-input" placeholder="0">
                {{-- <input type="text" hidden class="nilai-input" name="nilai" value=""> --}}

              </div>
              
              
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      </div>
    </div>
  </div>
</div>