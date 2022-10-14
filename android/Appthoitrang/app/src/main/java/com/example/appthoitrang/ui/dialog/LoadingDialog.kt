package com.example.appthoitrang.ui.dialog;

import com.example.appthoitrang.R
import com.example.appthoitrang.common.SingleTonHolder
import com.example.appthoitrang.databinding.DialogLoadingBinding
import com.sangtb.androidlibrary.utils.DialogLibrary
import dagger.hilt.android.AndroidEntryPoint

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/18/2022
*/
@AndroidEntryPoint
class LoadingDialog : DialogLibrary<DialogLoadingBinding>() {
    override val layout: Int
        get() = R.layout.dialog_loading

    companion object : SingleTonHolder<LoadingDialog>(::LoadingDialog)
}
