<?php
// 1.Viết chương trình PHP để kiểm tra xem một số có phải là số chẵn hay không.
function kiemTraChanLe($so)
{
    if (!is_int($so)) {
        echo "Số $so không phải là số nguyên.";
    } elseif ($so % 2 == 0) {
        echo "Số $so là số nguyên chẵn.";
    } else {
        echo "Số $so là số nguyên lẻ.";
    }
}
// Sử dụng hàm kiểm tra số nguyên chẵn lẻ
kiemTraChanLe(3);
echo "<br>";
kiemTraChanLe(10);
echo "<br>";
kiemTraChanLe(3.14);
echo "<br>";

// 2.Viết chương trình PHP để tính tổng của các số từ 1 đến n.
function tinhTong($n)
{
    $tong = 0;
    for ($i = 1; $i <= $n; $i++) {
        $tong += $i;
    }
    return $tong;
}
// Sử dụng hàm tính tổng
$n = 10;
$tong = tinhTong($n);
echo "Tổng của các số từ 1 đến $n là: $tong<br>";


// 3.Viết chương trình PHP để in ra bảng cửu chương từ 1 đến 10.
function inBangCuuChuong($so){
    echo "Bảng cửu chương số $so là: <br>";
    for($i=1; $i<=10; $i++){
        $tich=$so * $i;
        echo "$so x $i = $tich";
        echo "<br>";
    }
}
$so=8;
inBangCuuChuong($so);


// 4.Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
function kiemTraChuaTu($chuoi, $tu){
    $kiemtra = strpos($chuoi, $tu);
    if($kiemtra!==False){
        echo "Chuỗi $chuoi chứa từ $tu .<br>";
    }else{
        echo "Chuỗi $chuoi không chứa từ $tu . <br>";
    }
}
$chuoi = "Hôm nay là ngày đẹp trời";
$tu = "ngày đẹp trời";
kiemTraChuaTu($chuoi, $tu);
$chuoi = "Xin chào, tớ là Nguyễn Thị Quỳnh";
$tu = "nguyễn thị quỳnh";
kiemTraChuaTu($chuoi, $tu);


// 5.Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
function findMinMax($array){
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value){
        if ($value < $min){
            $min = $value;
        }
        if ($value > $max){
            $max = $value;
        }
    }
    echo "Giá trị nhỏ nhất trong mảng là: $min <br>";
    echo "Giá trị lớn nhất trong mảng là: $max <br>";
}
$array=[1, 200, 26, 30];
findMinMax($array);


// 6.Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
function sapXepMang($array){
    sort($array);
    echo "Mảng sau khi sắp xếp theo thứ tự tăng dần là: ";
    foreach ($array as $value){
        echo "$value ; ";
    }
}
$array = [3, 6, 1, 26, 12];
sapXepMang($array);


// 7.Viết chương trình PHP để tính giai thừa của một số nguyên dương.
function tinhGiaiThua($n){
    if ($n===0 || $n===1){
        return 1;
    }else{
        return $n * tinhGiaiThua($n-1);
    }
}
$n = 6;
$ketqua = tinhGiaiThua($n);
echo "Giai thua cua $n là: $ketqua <br>";


// 8.Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
function timSoNguyenTo ($n){
    if ($n <= 1){
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++){
        if ($n % $i ==0){
            return false;
        }
    }
    return true;
}
function timTrongKhoang ($a, $b){
    $x = [];
    for ($i = $a; $i <= $b; $i++){
        if (timSoNguyenTo($i)){
            $x[] = $i;
        }
    }
    foreach ($x as $SNT){
        echo "$SNT ; ";
    }
}
$a = 1;
$b = 60;
echo "Các số nguyên tố trong khoảng từ $a đến $b là: ";
timTrongKhoang ($a, $b);


// 9.Viết chương trình PHP để tính tổng của các số trong một mảng.
function tinhTongMang($array){
    $sum = 0;
    foreach ($array as $number){
        $sum += $number;
    }
    echo "<br>Tổng các số trong mảng là: $sum <br>";
}
$array = [2, 9, 6];
tinhTongMang($array);
// 10.Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
function fibonacci($n) {
  if ($n <= 0) {
    return [];
  } elseif ($n == 1) {
    return [0];
  } elseif ($n == 2) {
    return [0, 1];
  } else {
    $fibonacci = [0, 1];
    for ($i = 2; $i < $n; $i++) {
      $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
  }
}

$start = 1; // Giá trị bắt đầu của khoảng
$end = 10; // Giá trị kết thúc của khoảng

$fibonacciSequence = fibonacci($end);
$fibonacciInRange = array_slice($fibonacciSequence, $start - 1, $end - $start + 1);

foreach ($fibonacciInRange as $number) {
  echo $number . " ";
}


// 11.Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
function isArmstrongNumber($number) {
  $numDigits = strlen((string)$number);
  $sum = 0;
  $temp = $number;
  
  while ($temp != 0) {
    $digit = $temp % 10;
    $sum += pow($digit, $numDigits);
    $temp = (int)($temp / 10);
  }
  
  if ($sum == $number) {
    return true;
  } else {
    return false;
  }
}

$number = 153; // Số cần kiểm tra

if (isArmstrongNumber($number)) {
  echo "<br> $number  là số Armstrong.";
} else {
  echo "<br>$number  không là số Armstrong.";
}


// 12.Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
function insertElement($array, $element, $position) {
  if ($position < 0 || $position > count($array)) {
    echo "Vị trí chèn không hợp lệ.";
    return $array;
  }
  
  array_splice($array, $position, 0, $element);//array_splice: hàm chèn phần tử với vị trí position và không xóa phần tử nào
  return $array;
}

$array = [1, 2, 3, 4, 5]; // Mảng ban đầu
$element = 10; // Phần tử cần chèn
$position = 2; // Vị trí chèn

$result = insertElement($array, $element, $position);
echo "<br>Mảng mới: " . implode(", ", $result);//hàm implode() để nối các phần tử của mảng thành chuỗi và phân tách bằng dấu phẩy

// 13.Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($array) {
    $result = array_unique($array);
    return array_values($result);
}
$array = [1, 2, 2, 6, 3, 4, 6, 8];
$result = removeDuplicates($array);
echo "<br>Mảng mới: " . implode(", ", $result);


// 14.Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.

function findElementPosition($array, $element) {
  $positions = [];
  
  foreach ($array as $index => $value) {
    if ($value === $element) {
      $positions[] = $index;
    }
  }
  
  return $positions;
}

$array = [1, 2, 3, 4, 2, 5, 2]; // Mảng ban đầu
$element = 2; // Phần tử cần tìm

$result = findElementPosition($array, $element);

if (empty($result)) {
  echo "Phần tử không tồn tại trong mảng.";
} else {
  echo "Vị trí của phần tử $element trong mảng: " . implode(", ", $result);
}

// 15.Viết chương trình PHP để đảo ngược một chuỗi.

function reverseString($string) {
  $length = strlen($string);
  $reversedString = '';

  for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
  }

  echo "<br>Chuỗi đảo ngược là: $reversedString";
}

$string = "Hello, world!"; // Chuỗi ban đầu
reverseString($string);

// 16.Viết chương trình PHP để tính số lượng phần tử trong một mảng.

function countElements($array) {
  $count = count($array);
  echo "<br>Số lượng phần tử trong mảng: " . $count;
}

$array = [1, 2, 3, 4, 5]; // Mảng ban đầu
countElements($array);

// 17.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.

function isPalindrome($string) {
  $string = strtolower(preg_replace("/[^A-Za-z0-9]/", "", $string));
  $reversedString = strrev($string);//đảo ngược chuỗi

  if ($string === $reversedString) {
    return true;
  } else {
    return false;
  }
}

$string = "Madam, in Eden, I'm Adam"; // Chuỗi ban đầu

if (isPalindrome($string)) {
  echo "Chuỗi là chuỗi Palindrome.";
} else {
  echo "Chuỗi không là chuỗi Palindrome.";
}
// 18.Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.

function countOccurrences($array, $element) {
  $count = 0;

  foreach ($array as $value) {
    if ($value === $element) {
      $count++;
    }
  }

  return $count;
}

$array = [1, 2, 3, 2, 4, 2, 5]; // Mảng ban đầu
$element = 2; // Phần tử cần đếm

$count = countOccurrences($array, $element);
echo "<br>Số lần xuất hiện của phần tử $element trong mảng: " . $count;
// 19.Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.

function sortArrayDescending($array) {
  rsort($array);
  return $array;
}

$array = [5, 2, 8, 3, 1]; // Mảng ban đầu

$sortedArray = sortArrayDescending($array);
echo "<br>Mảng sau khi sắp xếp giảm dần: " . implode(", ", $sortedArray);


// 20.Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
//Thêm phần tử vào cuối mảng:
function addElementToEnd($array, $element) {
  $array[] = $element;
  return $array;
}

$array = [1, 2, 3, 4]; // Mảng ban đầu
$element = 5; // Phần tử cần thêm vào cuối mảng

$modifiedArray = addElementToEnd($array, $element);
echo "<br>Mảng sau khi thêm phần tử vào cuối: " . implode(", ", $modifiedArray);
//Thêm phần tử vào đầu mảng:

function addElementToBeginning($array, $element) {
  array_unshift($array, $element);
  return $array;
}

$array = [2, 3, 4, 5]; // Mảng ban đầu
$element = 1; // Phần tử cần thêm vào đầu mảng

$modifiedArray = addElementToBeginning($array, $element);
echo "<br>Mảng sau khi thêm phần tử vào đầu: " . implode(", ", $modifiedArray);

// 21.Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.

function findSecondLargest($array) {
  $max = $array[0];
  $secondMax = null;
  foreach ($array as $value) {
    if ($value > $max) {
      $secondMax = $max;
      $max = $value;
    } elseif ($value < $max && ($secondMax === null || $value > $secondMax)) {
      $secondMax = $value;
    }
  }
  return $secondMax;
}
$array = [5, 2, 8, 3, 1]; // Mảng ban đầu
$secondLargest = findSecondLargest($array);
if ($secondLargest !== null) {
  echo "<br>Số lớn thứ hai trong mảng: " . $secondLargest;
} else {
  echo "<br>Không tìm thấy số lớn thứ hai trong mảng.";
}
// 22.Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.

function findGCD($a, $b) {
  while ($b != 0) {
    $temp = $b;
    $b = $a % $b;
    $a = $temp;
  }
  return $a;
}

function findLCM($a, $b) {
  $gcd = findGCD($a, $b);
  $lcm = ($a * $b) / $gcd;
  return $lcm;
}

$num1 = 12;
$num2 = 18;

$gcd = findGCD($num1, $num2);
$lcm = findLCM($num1, $num2);

echo "<br>Ước số chung lớn nhất của $num1 và $num2 là: $gcd";
echo "<br>Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm<br>";
// 23.Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.

function isPerfectNumber($number) {
  if ($number <= 0) {
    return false;
  }
  $sum = 0;
  for ($i = 1; $i <= $number / 2; $i++) {
    if ($number % $i === 0) {
      $sum += $i;
    }
  } 
  return $sum === $number;
}
$number = 28; // Số cần kiểm tra

if (isPerfectNumber($number)) {
  echo $number . " là một số hoàn hảo.";
} else {
  echo $number . " không phải là một số hoàn hảo.";
}

// 24.Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.

function findLargestOdd($array) {
  $largestOdd = null;
  foreach ($array as $value) {
    if ($value % 2 !== 0 && ($largestOdd === null || $value > $largestOdd)) {
      $largestOdd = $value;
    }
  }
  return $largestOdd;
}
$array = [2, 5, 8, 3, 1, 7]; // Mảng ban đầu

$largestOdd = findLargestOdd($array);
if ($largestOdd !== null) {
  echo "<br>Số lẻ lớn nhất trong mảng: " . $largestOdd;
} else {
  echo "<br>Không tìm thấy số lẻ trong mảng.";
}

// 25.Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.

function isPrime($number) {
  if ($number <= 1) {
    echo "<br>$number không phải là số nguyên tố.";
  }
  for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i === 0) {
      echo "<br>$number không phải là số nguyên tố.";
    }
  }
  echo "<br>$number là số nguyên tố.";
}
$number = 17; // Số cần kiểm tra
isPrime($number);


// 26.Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.

function findLargestPositive($array) {
  $largestPositive = null;

  foreach ($array as $value) {
    if ($value > 0 && ($largestPositive === null || $value > $largestPositive)) {
      $largestPositive = $value;
    }
  }
  return $largestPositive;
}

$array = [2, -5, 8, -3, 1, 7]; // Mảng ban đầu
$largestPositive = findLargestPositive($array);
if ($largestPositive !== null) {
  echo "<br>Số dương lớn nhất trong mảng: " . $largestPositive;
} else {
  echo "<br>Không tìm thấy số dương trong mảng.";
}

// 27.Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegative($array) {
  $largestNegative = null;

  foreach ($array as $value) {
    if ($value < 0 && ($largestNegative === null || $value > $largestNegative)) {
      $largestNegative = $value;
    }
  }

  return $largestNegative;
}

$array = [2, -5, 8, -3, -1, 7]; // Mảng ban đầu
$largestNegative = findLargestNegative($array);
if ($largestNegative !== null) {
  echo "<br>Số âm lớn nhất trong mảng: " . $largestNegative;
} else {
  echo "<br>Không tìm thấy số âm trong mảng.";
}

// 28.Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
function sumOddNumbers($n) {
  $sum = 0;
  for ($i = 1; $i <= $n; $i += 2) {
    $sum += $i;
  }
  echo "<br>Tổng các số lẻ từ 1 đến $n là: $sum";
}

$n = 10; // Giá trị n
sumOddNumbers($n);

// 29.Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.

function findPerfectSquares($start, $end) {
  $perfectSquares = [];
  for ($i = $start; $i <= $end; $i++) {
    if (isPerfectSquare($i)) {//kiểm tra số chính phương bằng hàm isPerfectSquare
      $perfectSquares[] = $i;
    }
  }
  return $perfectSquares;
}

function isPerfectSquare($number) {
  $sqrt = sqrt($number);
  return ($sqrt * $sqrt == $number);
}

$start = 1; // Giá trị đầu của khoảng
$end = 100; // Giá trị cuối của khoảng
$perfectSquares = findPerfectSquares($start, $end);
if (!empty($perfectSquares)) {
  echo "<br>Các số chính phương trong khoảng từ $start đến $end là: ";
  foreach ($perfectSquares as $perfectSquare) {
    echo $perfectSquare . " ";
  }
} else {
  echo "Không tìm thấy số chính phương trong khoảng từ $start đến $end.";
}
// 30.Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.

function isSubstring($string, $substring) {
  $stringLength = strlen($string);
  $substringLength = strlen($substring);
  if ($substringLength > $stringLength) {
    return false;
  }
  for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
    $j = 0;
    while ($j < $substringLength && $string[$i + $j] == $substring[$j]) {
      $j++;
    }
    if ($j == $substringLength) {
      return true;
    }
  }
  return false;
}

$string = "Hello, world!";
$substring = "world";
if (isSubstring($string, $substring)) {
  echo "<br>$substring là chuỗi con của $string";
} else {
  echo "<br>$substring không là chuỗi con của $string";
}
?>