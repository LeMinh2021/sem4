package com.example.appthoitrang.utils;

import android.content.Context
import android.widget.ImageView
import android.widget.Toast
import androidx.core.net.toUri
import androidx.databinding.BindingAdapter
import androidx.fragment.app.Fragment
import androidx.navigation.NavDeepLinkRequest
import androidx.navigation.fragment.findNavController
import com.example.appthoitrang.R
import com.google.gson.Gson
import com.squareup.picasso.Picasso

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/18/2022
*/
@BindingAdapter("setImageUrl")
fun setUrlImage(imageView: ImageView, src: String?) {
    src?.let {
        Picasso.get().load(src).error(R.drawable.img_error).into(imageView)
    }
}

fun SharePrefs.checkUser() = get(SharePrefs.KEY_USER, String::class.java) != SharePrefs.EMPTY

fun Any.toJson(): String {
    return Gson().toJson(this)
}

fun <T>String.fromJSon(clazz: Class<T>): T? {
   return if(this != SharePrefs.EMPTY) Gson().fromJson(this,clazz) else null
}

fun Context.showToast(id : Int){
    Toast.makeText(this,getString(id),Toast.LENGTH_LONG).show()
}

fun Fragment.navigateDeepLink(uri: Int){
    NavDeepLinkRequest.Builder
        .fromUri(getString(uri).toUri())
        .build().let {
            findNavController().navigate(it)
        }
}
