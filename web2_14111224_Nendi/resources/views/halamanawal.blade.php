@extends('templates.index')
@section('content')
	<article>
		<table border="1" width="75%" align="center">
			<td>
				<th><a href="{{URL('tambah')}}"><button type="submit">+ TAMBAH</button></a></th>
			</td>
				<th><a href="{{URL('edit')}}"><button type="submit">+ EDIT</button></a></th>
			<tr>
				<td>No</td>
				<td>Nama</td>
				<td>Nim</td>
				<td>Alamat</td>
				<td>Aksi</td>
			</tr>
		</table>
		<td>
		<td colspan="3" align="right"><a hreff="{{URL :: to('/')}}"><button type="submit">KEMBALI</button>
		<tr>
	</article>
@stop 