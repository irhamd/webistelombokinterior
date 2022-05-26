@extends('body')
@section('main_body')


<div class="wrapper">
  
<style>
  .content-header{
    min-height: 114px;
    margin-bottom:13px;
    background: url('/static/front/img/page_banner.png');
  }

  .content-header h1, .content-header small{
    color: rgba(255,255,255,1);
  }
</style>

<section class="content-header">
  <div class="container">
       <div class="pull-left">
         <h1>
          BIAYA KAMAR
         </h1>
       </div>
       <div class="pull-right" style="margin-top:28px;">
         <ol class="breadcrumb">
           <li>
             <a href="#">
               Informasi
             </a>
           </li>
           <li class="active">Artikel</li>
         </ol>
       </div>
  </div>

</section>
  <div class="container" style="margin-top:55px; margin-bottom:55px;">
  
    <table border="0" cellpadding="0" cellspacing="0" style="width:594px">
	<tbody>
		<tr>
			<td style="width:43px;height:27px;">
			<p>No</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Tipe Kamar</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>Tarif / hari *</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>1</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Ruang Rawat Inap Kelas 3</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>60,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>2</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Ruang Rawat Inap Kelas 2</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>100,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>3</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Ruang Rawat Inap Kelas 1</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>170,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>4</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Ruang Rawat Inap Kelas VIP</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>550,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>5</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Ruang Rawat Inap Kelas VVIP</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>850,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">
			<p>6</p>
			</td>
			<td style="width:389px;height:27px;">
			<p>Perawatan Intensif ICU/ICCU/PICU/NICU/</p>

			<p>HCU /INTERMEDIATE</p>
			</td>
			<td style="width:162px;height:27px;">
			<p>&nbsp;250,000</p>
			</td>
		</tr>
		<tr>
			<td style="width:43px;height:27px;">&nbsp;</td>
			<td style="width:389px;height:27px;">&nbsp;</td>
			<td style="width:162px;height:27px;">&nbsp;</td>
		</tr>
	</tbody>
</table>

<p style="margin-left:-7.1pt;">*belum termasuk tindakan Dokter dan perawatan</p>

  
</div>
</div>




@endsection