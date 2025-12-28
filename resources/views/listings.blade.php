<h1>{{ $heading }}</h1>
@foreach ($listings as $listing): 
    <h2><?php echo $listing['id'];  ?></h2>
    <p><?php echo $listing['title'] ?></p>
@endforeach