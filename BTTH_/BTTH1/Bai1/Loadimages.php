<?php
if(!isset($_SESSION['flowers'])){
$_SESSION['flowers'] = [
    [
        "name" => "Hoa Dạ Yến Thảo",
        "description" => "Dạ yến thảo là lựa chọn thích hợp cho những ai yêu thích trồng hoa làm đẹp nhà ở. Hoa có thể nở rực quanh năm, kể cả tiết trời se lạnh của mùa xuân hay cả những ngày nắng nóng cao điểm của mùa hè. Dạ yến thảo được trồng ở chậu treo nơi cửa sổ hay ban công, dáng hoa mềm mại, sắc màu đa dạng nên được yêu thích vô cùng.",
        "image" => "images/DaYenThao.jpg"
    ],
    [
        "name" => "Hoa Đồng Tiền",
        "description" => "Hoa đồng tiền thích hợp để trồng trong mùa xuân và đầu mùa hè, khi mà cường độ ánh sáng chưa quá mạnh. Cây có hoa to, nở rộ rực rỡ, lại khá dễ trồng và chăm sóc nên sẽ là lựa chọn thích hợp của bạn trong tiết trời này. Về mặt ý nghĩa, hoa đồng tiền cũng tượng trưng cho sự sung túc, tình yêu và hạnh phúc viên mãn.",
        "image" => "images/DongTien.jpg"
    ],
    [
        "name" => "Hoa Giấy",
        "description" => "Hoa giấy có mặt ở hầu khắp mọi nơi trên đất nước ta, thích hợp với nhiều điều kiện sống khác nhau nên rất dễ trồng, không tốn quá nhiều công chăm sóc nhưng thành quả mang lại sẽ khiến bạn vô cùng hài lòng. Hoa giấy mỏng manh nhưng rất lâu tàn, với nhiều màu như trắng, xanh, đỏ, hồng, tím, vàng… cùng nhiều sắc độ khác nhau. Vào mùa khô hanh, hoa vẫn tươi sáng trên cây khiến ngôi nhà luôn luôn bừng sáng",
        "image" => "images/HoaGiay.jpg"
    ],
    [
        "name" => "Hoa Thanh Tú",
        "description" => "Mang dáng hình tao nhã, màu sắc thiên thanh dịu dàng của hoa thanh tú có thể khiến bạn cảm thấy vô cùng nhẹ nhàng khi nhìn ngắm. Cây khá dễ trồng, lại nở nhiều hoa cùng một lúc, từ một bụi nhỏ có thể đâm nhánh, tạo nên những cây con phát triển sum suê. Thanh tú trồng ở nơi có nắng sẽ ra hoa nhiều, vì thế thích hợp trong cả mùa xuân lẫn mùa hè, đem lại khoảng không gian xanh mát cho ngôi nhà ngày oi nóng.",
        "image" => "images/HoaThanhTu.jpg"
    ],
    [
        "name" => "Hoa Đèn Lồng",
        "description" => "Giống như tên gọi, hoa đèn lồng có vẻ đẹp giống như chiếc đèn lồng đỏ trên cao. Nếu giàu trí tưởng tượng hơn, chúng ta sẽ hình dung hoa khi nụ đổ xuống thành từng chùm, kết năm kết ba như những thiếu nữ xúng xính trong chiếc đầm dạ hội. Hoa đèn lồng còn có tên là hồng đăng hoa, trồng trong chậu treo, bồn, phên dậu,… gieo hạt vào mùa xuân và cho hoa quanh năm.",
        "image" => "images/DongTien.jpg"
    ],
    [
        "name" => "Hoa Cẩm Chướng",
        "description" => "Cẩm chướng là loại hoa thích hợp trồng vào dịp xuân - hè, nếu tiết trời không quá lạnh có thể kéo dài đến tận mùa đông. Hoa có phần thân mảnh, các đốt ngắn mang lá kép cùng nhiều màu sắc như hồng, vàng, đỏ, tím,… thậm chí có thể pha lẫn màu để tạo nên đường viền xinh xắn. Đặt một chậu hoa cẩm chướng trên bàn sẽ khiến căn phòng của bạn đẹp mắt hơn rất nhiều.",
        "image" => "images/HoaCamChuong.jpg"
    ],
    [
        "name" => "Hoa Huỳnh Anh",
        "description" => "Nếu bạn đang đi tìm một loài hoa tô điểm cho khu vực ban công hoặc hàng rào ngôi nhà thì huỳnh anh là một lựa chọn thích hợp trong mùa này hơn cả. Hoa có màu vàng rực, hình dạng như chiếc kèn be bé inh xinh, lại dễ trồng, mọc nhanh, vươn cao… Huỳnh Anh rất thích nắng, ánh nắng giúp hoa tỏa sáng rực rỡ, nếu ở nơi bóng râm thì chúng sẽ nhạt màu, kém sắc.",
        "image" => "images/HoaHuynhAnh.jpg"
    ]
];
}

function add($name, $description, $image)
{
    $_SESSION['flowers'][] = [
        'name' => $name,
        'description' => $description,
        'image' => $image
    ];
}

function updateFlower($index, $newName, $newDescription, $newImage)
{
    if (isset($_SESSION['flowers'][$index])) {
        $_SESSION['flowers'][$index] = [
            'name' => $newName,
            'description' => $newDescription,
            'image' => $newImage ?: $_SESSION['flowers'][$index]['image']
        ];
        return true;
    }
    return false;
}
function deleteFlower($index)
{
    if (isset($_SESSION['flowers'][$index])) {
        array_splice($_SESSION['flowers'], $index, 1);
        return true;
    }
    return false;
}
