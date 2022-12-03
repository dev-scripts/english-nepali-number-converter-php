
# Nepali English Number Converter

Laravel Package to convert English number to Nepali number and Nepali Number to English Number.

I have used Unicode to convert English number to Nepali number. 

I have learned it while doing Government Applications of Nepal in 2012. 
It is very simple, you can easily implement in your project.


## Installation

Can install via composer
```
composer require dev-scripts/english-nepali-number-converter-php
```

## Usage

### Convert number

1. **Convert number form English to Nepali**

```php
echo Convert::toNp(123.33);
Output : "१२३.३३";

// with thousand count
$number = 123456789.05;
$numberThousandCount = number_format($number, 2);
echo  Convert::toNp($numberThousandCount);
Output : "१२३,४५६,७८९.०५";
```

2. **Convert number form Nepali to English**

```php
echo Convert::toEn("१२३४५६७८९.०५");
Output : 123456789.05;
```

## API

`Convert::toEn($number)`

| Param         | Type                              |Description|
| ------------- | --------------------------------- |-----------|
| $number        | `string` or `number`              | Input number to be converted.|

**Example**

`index.php`
```php
echo Convert::toNp(123.33);
Output : "१२३.३३";

// with thousand count
$number = 123456789.05;
$numberThousandCount = number_format($number, 2);
echo  Convert::toNp($numberThousandCount);
Output : "१२३,४५६,७८९.०५";
```



