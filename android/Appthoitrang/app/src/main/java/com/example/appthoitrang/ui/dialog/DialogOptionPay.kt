package com.example.appthoitrang.ui.dialog

import android.os.Bundle
import android.view.View
import androidx.fragment.app.activityViewModels
import com.example.appthoitrang.R
import com.example.appthoitrang.databinding.DialogOptionPayBinding
import com.example.appthoitrang.ui.user.fragment.cart.viewmodel.CartViewModel
import com.sangtb.androidlibrary.utils.DialogLibrary
import dagger.hilt.android.AndroidEntryPoint

/*
* Copyright © 2022 UITS CO.,LTD
* Created by SangTB on 11/06/2022.
*/

@AndroidEntryPoint
class DialogOptionPay : DialogLibrary<DialogOptionPayBinding>(){
    override val layout: Int
        get() = R.layout.dialog_option_pay

    override val viewModel by activityViewModels<CartViewModel>()

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)
        binding.action = viewModel
    }
}