<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolios</title>
</head>
<body>
    <h1>Your Portfolios</h1>

    @if ($portfolios->isEmpty())
        <p>You have no portfolios.</p>
    @else
        <ul>
            @foreach ($portfolios as $portfolio)
                <li>
                    <a href="{{ route('portfolios.show', $portfolio) }}">
                        {{ $portfolio->basic_info }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('portfolios.create') }}">Create New Portfolio</a>
</body>
</html>
