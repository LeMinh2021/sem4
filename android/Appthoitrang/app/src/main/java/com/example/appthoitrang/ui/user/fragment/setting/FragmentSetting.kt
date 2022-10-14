package com.example.appthoitrang.ui.user.fragment.setting

import android.os.Bundle
import android.view.View
import androidx.fragment.app.activityViewModels
import com.example.appthoitrang.R
import com.example.appthoitrang.databinding.FragmentSettingBinding
import com.example.appthoitrang.ui.user.fragment.setting.viewmodel.MyProfileViewModel
import com.sangtb.androidlibrary.base.BaseFragment
import com.sangtb.androidlibrary.utils.showPopUp
import dagger.hilt.android.AndroidEntryPoint

@AndroidEntryPoint
class FragmentSetting : BaseFragment<FragmentSettingBinding,MyProfileViewModel>(){
    override val layoutId: Int
        get() = R.layout.fragment_setting
    override val viewModel: MyProfileViewModel by activityViewModels()

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)
        binding.apply {
            action = viewModel

            txtSettingFont.showPopUp(R.menu.menu_font){
                //Todo some thing
            }

            txtSettingFontSize.showPopUp(R.menu.menu_font_size){
                //Todo some thing
            }

        }
    }
}