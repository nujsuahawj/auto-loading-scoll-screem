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

    let loading = false;
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            // code to call Livewire method
            //@this.call('loadMore');
            if (!loading) {
                loading = true; // Set loading flag to true to prevent multiple requests
                @this.call('loadMore').then(function() {
                    // Callback function to reset loading flag after data is loaded
                    loading = false;
                });
            }
        }
    };
</script>
