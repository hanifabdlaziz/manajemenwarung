<x-app-layout>
    <x-slot name="title">
        Barang
    </x-slot>

    <section class="row">
        <div>
            <x-button type="primary btn-success" text="Add"/>
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID Barang</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Kategori</th>
                        <th>Stok</th>
                        <th>Total Barang</th>
                        <th>Harga Ecer</th>
                        <th>Harga Grosir</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><x-button action="" type="primary btn-block" text="Edit"/></td>
                        <td><x-button action="" type="primary btn-danger" text="Delete"/></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-app-layout>
