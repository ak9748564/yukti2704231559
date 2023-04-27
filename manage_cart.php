<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems = array_column($_SESSION['cart'],'product_id');
            if(in_array($_POST['product_id'],$myitems))
            {
                echo"<script>alert('Item Already Added');window.location.href='shop.php';</script>";
            }
            else
            {
            $count=count($_SESSION['cart']);
            $_SESSION['cart'][$count]=array('product_image'=>$_POST['product_image'],'product_id'=>$_POST['product_id'], 'product_name'=>$_POST['product_name'],'product_price'=>$_POST['product_price'],'product_category'=>$_POST['product_category'],'product_quantity'=>$_POST['product_quantity']);
             echo"<script>alert('Item Added');window.location.href='shop.php';</script>";
            }
        }
        else
        {
            $_SESSION['cart'][0]=array('product_image'=>$_POST['product_image'],'product_id'=>$_POST['product_id'], 'product_name'=>$_POST['product_name'],'product_price'=>$_POST['product_price'],'product_category'=>$_POST['product_category'],'product_quantity'=>$_POST['product_quantity']);
             echo"<script>alert('Item Added');window.location.href='shop.php';</script>";
        }
    }
    else
    if(isset($_POST['BN']))
    {
        session_destroy();
       
        session_start();
        
        $_SESSION['cart'][0]=array('product_image'=>$_POST['product_image'],'product_id'=>$_POST['product_id'],'product_name'=>$_POST['product_name'],'product_price'=>$_POST['product_price'],'product_category'=>$_POST['product_category'],'product_quantity'=>$_POST['product_quantity']);
        echo "<script>window.location.href='cart.php';</script>";
        
    }
    else
    if(isset($_POST['removeBtn']))
    {
        if(isset($_SESSION['cart']))
        {
            foreach(($_SESSION['cart']) as $key => $value)
            {
                if($value['product_id']==$_POST['product_id'])
                {
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart']=array_values($_SESSION['cart']);
                    echo" <script>window.location.href= 'cart.php';</script>";
                }
            }
        }
    }  
    else
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
          if($value['product_id']==$_POST['product_id'])
              {
              $_SESSION['cart'][$key]['product_quantity']=$_POST['product_quantity'];
              echo "<script>window.location.href='cart.php';</script>";
              }
        }
    }  
}
?>