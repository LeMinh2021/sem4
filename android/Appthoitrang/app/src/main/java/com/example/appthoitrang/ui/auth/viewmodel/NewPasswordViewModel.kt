package com.example.appthoitrang.ui.auth.viewmodel;

import android.app.Application
import androidx.lifecycle.MutableLiveData
import com.example.appthoitrang.R
import com.example.appthoitrang.data.model.body.NewPassBody
import com.example.appthoitrang.data.repository.auth.AuthRepository
import com.example.appthoitrang.utils.Const
import com.sangtb.androidlibrary.base.BaseViewModel
import dagger.hilt.android.lifecycle.HiltViewModel
import javax.inject.Inject

/*
    Copyright © 2022 UITS CO.,LTD
    Created by SangTB on 5/28/2022
*/

@HiltViewModel
public class NewPasswordViewModel @Inject constructor(
    application: Application,
    private val authRepository: AuthRepository
) :
    BaseViewModel(application) {
    private val email = MutableLiveData<String>()
     val password = MutableLiveData<String>()
     val newPassword = MutableLiveData<String>()

    fun setEmail(value: String) {
        email.value = value
    }

    fun onAgree() {
        if(password.value == newPassword.value){
            authRepository.updatePasswordForEmail(NewPassBody(email.value,password.value)){
                if(it == Const.SUCCESS){
                    backScreen()
                    showToast(R.string.update_password_success)
                    return@updatePasswordForEmail
                }
                showToast(R.string.update_faild)
            }
            return
        }
        showToast(R.string.password_are_not_the_same)
    }
}
