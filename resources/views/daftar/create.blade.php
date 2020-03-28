@extends('templates.app')

@section('content')
        <section>
        <div class="wizard">
          <div class="page-header atas">
            <h2>PPDB SMK Muhammadiyah 2 Kuningan</h2>
          </div>
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Data Siswa">
                            <span class="round-tab">
                                1
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Riwayat pendidikan">
                            <span class="round-tab">
                                2
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Orang Tua">
                            <span class="round-tab">
                                3
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Selesai">
                            <span class="round-tab">
                                <p class="selesai">Selesai</p>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

            <form role="form" class="form-horizontal" action="{{route('daftar.store')}}" method="post" id="frm-register">
              {{ csrf_field() }}
                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="step1">
                        <div class="step1">
                          <div class="step_21">
                            <div class="row">
                              <div class="page-header" style="text-align:center">
                                <h4>Data Siswa</h4>
                              </div>
                              <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">NIK</label>
                                    <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control"  data-validation="required,," name="nik" placeholder="NIK (Sesuai Kartu Keluarga)">
                                </div>
                              </div>  
                            <div class="form-group">
                              <label for="inputEmail3" class="col-lg-2 col-sm-12 control-label">Nama Siswa</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" name="nama" placeholder="Nama Siswa" data-validation="required," onkeyup="this.value = this.value.toUpperCase()" >

                              </div>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="col-sm-12 col-lg-2 control-label">Jenis Kelamin</label>
                              <div class="col-lg-8 col-sm-12">
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="jk" id="jenis_kelamin1" value="LAKI-LAKI" checked>
                                      Laki - Laki
                                    </label>
                                    <label>
                                      <input type="radio" name="jk" id="jenis_kelamin1" value="PEREMPUAN">
                                      Perempuan
                                    </label>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Tempat Tanggal Lahir</label>
                              <div class="col-sm-12 col-lg-3">
                                  <input type="text" class="form-control"  data-validation="required" name="tlahir" placeholder="Tempat Lahir" onkeyup="this.value = this.value.toUpperCase()">

                              </div>
                              <div class="col-sm-12 col-lg-3">
                                  <input type="date" class="form-control"  data-validation="required" name="tgl_lahir" placeholder="DD/MM/YYYY">

                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Agama</label>
                              <div class="col-lg-8 col-sm-12">
                                  <select class="form-control" name="agama" data-validation="required">
                                    <option disabled selected>- Pilih Agama -</option>
                                    <option value="ISLAM">ISLAM</option>
                                    <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                    <option value="KRISTEN KHATOLIK">KRISTEN KHATOLIK</option>
                                    <option value="HINDU">HINDU</option>
                                    <option value="BUDHA">BUDHA</option>
                                    <option value="KHONGHUCU">KHONGHUCU</option>
                                  </select>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Anak Ke</label>
                              <div class="col-sm-12 col-lg-1">
                                  <input type="text" class="form-control" id="anak_ke"  data-validation="required," name="anak">

                              </div>
                              <label for="" class="col-sm-12 col-lg-1 control-label">Dari</label>
                              <div class="col-sm-12 col-lg-1">
                                  <input type="text" class="form-control" id="dari" name="saudara"  data-validation="required,">

                              </div>
                              <label for="" class="col-sm-12 col-lg-1 control-label">Bersaudara</label>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Alamat Lengkap</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="alamat"  data-validation="required" name="alamat" placeholder="Alamat Lengkap" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label" >Kota/Kab</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="kota" name="kabupaten"  data-validation="required" placeholder="Kota/Kab" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Kecamatan</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="kecamatan"  data-validation="required" name="kecamatan" placeholder="Kecamatan" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Desa/Kelurahan</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="kelurahan"  data-validation="required" name="desa" placeholder="Kelurahan" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-1 col-sm-offset-1 control-label">RT</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" id="rt" name="rt"  placeholder="" data-validation="number,required">
                              </div>
                              <label for="inputEmail3" class="col-sm-1 control-label">RW</label>
                              <div class="col-sm-2">
                                  <input type="text" class="form-control" id="rw" name="rw"  placeholder="" data-validation="number,required">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Kode Pos</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="kode_pos"  data-validation="number,required" name="kode_pos" placeholder="Kode Pos">
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Status Dalam Kandungan</label>
                                <div class="col-lg-8 col-sm-12">
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="status" value="ANAK KANDUNG" checked>
                                      ANAK KANDUNG
                                    </label>
                                    &nbsp;
                                    <label>
                                      <input type="radio" name="status" value="ANAK TIRI">
                                      ANAK TIRI
                                    </label>
                                    &nbsp;
                                    <label>
                                      <input type="radio" name="status" value="ANAK ASUH">
                                      ANAK ASUH
                                    </label>
                                    &nbsp;
                                    <label>
                                      <input type="radio" name="status" value="ANAK ANGKAT">
                                      ANAK ANGKAT
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Nomor Handphone</label>
                                  <div class="col-lg-8 col-sm-12">
                                    <input type="text" class="form-control" id="no_hp"  data-validation="number,required" name="no_hp" placeholder="NO. HP">
                                </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Hobi</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="hobi"  data-validation="required" name="hobi" placeholder="hobi" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Cita - Cita</label>
                              <div class="col-lg-8 col-sm-12">
                                  <input type="text" class="form-control" id="citacita"  data-validation="required" name="citacita" placeholder="Cita - Cita" onkeyup="this.value = this.value.toUpperCase()">
                              </div>
                            </div>
                            <div class="form-group">
                            <label for="" class="col-sm-12 col-lg-2 control-label">Jarak</label>
                              <div class="col-sm-1 col-lg-1">
                                  <input type="text" class="form-control" id="dari" name="jarak"  data-validation="number,required">
                              </div>
                              <label for="" class="col-sm-12 col-lg-1 control-label">Km</label>
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1" class="col-sm-12 col-lg-2 control-label">Boarding</label>
                              <div class="col-lg-8 col-sm-12">
                                  <div class="radio">
                                    <label>
                                      <input type="radio" name="boarding" value="YA" checked>
                                      YA
                                    </label>
                                    <label>
                                      <input type="radio" name="boarding" value="TIDAK">
                                      TIDAK
                                    </label>
                                  </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Kompetensi Keahlian Yang Di Pilih</label>
                              <div class="col-lg-8 col-sm-12">
                                  <select class="form-control" name="jurusan" data-validation="required">
                                    <option disabled selected>- Kompetensi Keahlian -</option>
                                    <option value="TEKNIK KENDARAAN RINGAN OTOMOTIF">TEKNIK KENDARAAN RINGAN OTOMOTIF</option>
                                    <option value="TEKNIK DAN BISNIS SEPEDA MOTOR">TEKNIK DAN BISNIS SEPEDA MOTOR</option>
                                    <option value="TEKNIK KOMPUTER DAN JARINGAN">TEKNIK KOMPUTER DAN JARINGAN</option>
                                    <option value="REKAYASA PERANGKAT LUNAK">REKAYASA PERANGKAT LUNAK</option>
                                    <option value="FARMASI">FARMASI</option>
                                  </select>

                              </div>
                            </div>
                        </div>
                      </div>
                        <ul class="list-inline pull-right" style="margin-top: 10px">
                            <li><button type="button" class="btn btn-primary next-step">Selanjutnya</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step2">
                        <div class="step2">
                            <div class="step_21">
                                <div class="row">
                                  <div class="page-header" style="text-align:center">
                                    <h4>Data Riwayat Pendidikan</h4>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Nama Asal Sekolah</label>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" class="form-control" data-validation="required" name="sekolah" placeholder="Nama Asal Sekolah smp/mts" data-validation="required" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">Alamat Sekolah</label>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" class="form-control" id="alamat_sekolah"  data-validation="required" name="alamat_sekolah" placeholder="Alamat Sekolah" data-validation="required" onkeyup="this.value = this.value.toUpperCase()">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-12 col-lg-2 control-label">NISN</label>
                                    <div class="col-lg-8 col-sm-12">
                                        <input type="text" class="form-control" id="nisn"  data-validation="number,required" name="nisn" placeholder="NISN" min10">
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Sebelumnya</button></li>
                            <li><button type="button" class="btn btn-primary next-step">Selanjutnya</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="step3">
                        <div class="step1">
                          {{-- Orang Tua --}}
                          <div class="row" id="ortu">
                            <div class="col-lg-6 col-sm-12">
                              <div class="step_21">
                                <div class="page-header" style="text-align:center">
                                  <h4>Data Ayah/Wali</h4>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Nama</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="ayah" placeholder="Nama" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Tempat Lahir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="tl_ayah" placeholder="tempat lahir" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Tanggal Lahir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="date" class="form-control"  data-validation="required" name="l_ayah" placeholder="DD/MM/YYYY">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Alamat Lengkap</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="a_ayah" placeholder="Alamat Lengkap" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Pekerjaan</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="k_ayah" placeholder="Pekerjaan" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Penghasilan/Bulan</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="number,required" name="p_ayah" placeholder="Penghasilan/Bulan">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Pendidikan Terakhir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="pen_ayah" placeholder="Pendidikan Terakhir">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Nomor Handphone</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control" id="no_hp"  data-validation="number,required" name="hp_ayah" placeholder="Nomor Handphone">
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                              <div class="step_21">
                                <div class="page-header" style="text-align:center">
                                  <h4>Data Ibu/Wali</h4>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Nama</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="ibu" placeholder="Nama" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Tempat Lahir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control" data-validation="required" name="tl_ibu" placeholder="tempat lahir" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Tanggal Lahir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="date" class="form-control"  data-validation="required" name="l_ibu" placeholder="DD/MM/YYYY">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Alamat Lengkap</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control" data-validation="required" name="a_ibu" placeholder="Alamat Lengkap" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Pekerjaan</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control" data-validation="required" name="k_ibu" placeholder="Pekerjaan" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Penghasilan/Bulan</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="number, required" name="p_ibu" placeholder="Penghasilan/Bulan">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Pendidikan Terakhir</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="required" name="pen_ibu" placeholder="Pendidikan Terakhir" onkeyup="this.value = this.value.toUpperCase()">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail3" class="col-sm-12 col-lg-4 control-label">Nomor Handphone</label>
                                  <div class="col-lg-8 col-sm-12">
                                      <input type="text" class="form-control"  data-validation="number,required" name="hp_ibu" placeholder="Nomor Handphone">
                                  </div>
                                </div>
                            </div>
                            </div>
                          </div>
                        </div>
                        <ul class="list-inline pull-right">
                            <li><button type="button" class="btn btn-default prev-step">Sebelumnya</button></li>
                            <li><button type="button" class="btn btn-primary btn-info-full next-step">Selanjutnya</button></li>
                        </ul>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="complete">
                        <div class="step44">
                            <div class="selesai">
                              <h3>Selesai</h3>
                              <i class="fa fa-check-circle-o fa-5x" style="font-size: 200px;color: #08c;"></i>
                              <h4>Terimakasih Anda telah mendaftarkan diri,</h4>
                              <h4>pastikan data yang anda masukan adalah data yang benar.</h4>
                              <h4>Silahkan klik tombol Selesai</h4>
                              <div class="" style="width: 200px; margin:0 auto;">
                                <button type="submit" class="btn btn-flat btn-block btn-lg btn-primary">Selesai <i class="fa fa-check-circle"></i></button>
                              </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
@endsection
