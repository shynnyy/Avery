@extends('frontend.layouts.app')

@section('contents')

<style>
    /* Styles for header */
header {
    text-align: center;
    padding: 20px 0;
}

/* Styles for main content */
main {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

/* Styles for sections */
section {
    flex-basis: 45%;
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Styles for illustrations */
.illustrations {
    margin-top: 20px;
    display: flex;
    justify-content: center;
}
/* Styles for sections */
section {
    flex-basis: 45%;
    margin: 0 20px 15px 20px; /* Mengurangi margin kanan dan kiri */
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Styles for size chart section */
section:last-child {
    flex-basis: 100%;
    margin-top: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

/* Styles for size chart table */
.size-chart {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

.size-chart th,
.size-chart td {
    padding: 10px;
    border: 1px solid #ccc;
}

.size-chart th {
    background-color: #f0f0f0;
    text-align: center;
}

/* Styles for tips */
section:last-child ul {
    padding-left: 20px;
}

/* General styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
}

h1, h2, h3 {
    color: #333;
}

p {
    color: #666;
}

/* Responsive styles */
@media (max-width: 768px) {
    main {
        flex-direction: column;
    }

    section, section:last-child {
        flex-basis: 100%;
    }
}

</style>

<body>
    <header>
        <h1>Size Measurement Guide</h1>
        <p>Follow these steps to accurately measure your size for pants, jacket, and shirt.</p>
    </header>

    <main>
        <section>
            <h2>Measurement Steps for Pants</h2>
            <ol>
                <li>Measure your waist circumference.</li>
                <li>Determine your inseam length.</li>
                <li>Measure the length of the pants.</li>
            </ol>
            <div class="illustrations">
                <!-- Add visual representations for pants measurement here -->
            </div>
        </section>

        <section>
            <h2>Measurement Steps for Jacket</h2>
            <ol>
                <li>Measure your chest circumference.</li>
                <li>Determine your sleeve length.</li>
                <li>Measure the length of the jacket.</li>
            </ol>
            <div class="illustrations">
                <!-- Add visual representations for jacket measurement here -->
            </div>
        </section>

        <section>
            <h2>Measurement Steps for Shirt</h2>
            <ol>
                <li>Measure your chest circumference.</li>
                <li>Determine your sleeve length.</li>
                <li>Measure the length of the shirt.</li>
            </ol>
            <div class="illustrations">
                <!-- Add visual representations for shirt measurement here -->
            </div>
        </section>
    </main>

    <section>
        <h2>Size Chart</h2>
        <table class="size-chart">
            <tr>
                <th>Size</th>
                <th>Pants Waist (inches)</th>
                <th>Pants Inseam (inches)</th>
                <th>Pants Length (inches)</th>
                <th>Jacket Chest (inches)</th>
                <th>Jacket Sleeve (inches)</th>
                <th>Jacket Length (inches)</th>
                <th>Shirt Chest (inches)</th>
                <th>Shirt Sleeve (inches)</th>
                <th>Shirt Length (inches)</th>
            </tr>
            <tr>
                <td>Small</td>
                <td>30-32</td>
                <td>30</td>
                <td>28</td>
                <td>36-38</td>
                <td>24</td>
                <td>28</td>
                <td>34-36</td>
                <td>22</td>
                <td>26</td>
            </tr>
            <tr>
                <td>Medium</td>
                <td>34-36</td>
                <td>32</td>
                <td>30</td>
                <td>40-42</td>
                <td>25</td>
                <td>30</td>
                <td>38-40</td>
                <td>23</td>
                <td>28</td>
            </tr>
            <tr>
                <td>Large</td>
                <td>38-40</td>
                <td>34</td>
                <td>32</td>
                <td>44-46</td>
                <td>26</td>
                <td>32</td>
                <td>42-44</td>
                <td>24</td>
                <td>30</td>
            </tr>
            <tr>
                <td>X-Large</td>
                <td>42-44</td>
                <td>36</td>
                <td>34</td>
                <td>48-50</td>
                <td>27</td>
                <td>34</td>
                <td>46-48</td>
                <td>25</td>
                <td>32</td>
            </tr>
        </table>
        <br>
        <h2>Tips</h2>
        <ul>
            <li>Use a flexible measuring tape for accurate results.</li>
            <li>Measure over your undergarments for the best fit.</li>
        </ul>
    </section>
</body>
@endsection
