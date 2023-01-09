package com.example.bussystem

import android.content.Intent
import android.os.Bundle
import android.widget.*
import androidx.appcompat.app.AppCompatActivity

var name: String = "User"
var age : String = ""
var email : String = ""


class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        var editdate = findViewById<EditText>(R.id.textdate)
        editdate?.isEnabled = false;
        val context = this





        var hello = findViewById<TextView>(R.id.hello)
        hello.setText("Hello " + name)
        val calendar = findViewById<CalendarView>(R.id.calendarView2)
        calendar?.setOnDateChangeListener{ view, year, month, dayOfMonth ->
            val msg = "" + dayOfMonth + "/" + (month + 1) + "/" + year
            editdate.setText(msg)
        }
        val btn_confirm = findViewById<Button>(R.id.btn_confirm)


        btn_confirm.setOnClickListener{
            if(editdate.text.toString().length > 0) {
                val intent = Intent(this, MainActivity2::class.java)
                intent.putExtra("date",editdate.text.toString())
                startActivity(intent)
            }
            else{
                Toast.makeText(context, "Empty", Toast.LENGTH_SHORT).show()
            }
        }
        val btn_update = findViewById<Button>(R.id.btn_profile)




        btn_update.setOnClickListener{
            val intent = Intent(this, MainActivity3::class.java)
            intent.putExtra("name", name)
            intent.putExtra("age", age)
            intent.putExtra("email", email)
            startActivityForResult(intent,1)
        }
    }

    override fun onActivityResult(requestCode: Int, resultCode: Int, data: Intent?) {
        super.onActivityResult(requestCode, resultCode, data)
        if(requestCode == 1){
            if(resultCode == RESULT_OK){
                val name1 = data?.getStringExtra("textname")
                val age1 = data?.getStringExtra("textage")
                val email1 = data?.getStringExtra("textemail")
                var hello = findViewById<TextView>(R.id.hello)
                hello.setText("Hello " + name1.toString())
                name = name1.toString()
                age = age1.toString()
                email = email1.toString()
            }

        }
    }

}