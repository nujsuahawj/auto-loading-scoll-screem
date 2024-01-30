<div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            // code to call Livewire method
            @this.call('loadMore');
        }
    };
</script>
