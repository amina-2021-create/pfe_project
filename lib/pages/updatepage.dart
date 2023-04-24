import 'dart:convert';
import 'package:abssence/pages/menu.dart';

import 'updatepage.dart';
import 'package:flutter/material.dart';
import 'package:flutter/services.dart';
import 'package:http/http.dart' as http;
import 'login.dart';

class modifier extends StatelessWidget {
  @override
  Widget build(BuildContext context) {
    return Scaffold(
       appBar: AppBar(
        title: Text("Modifier"),
       ),
       drawer: Drawer(),
       
       body: Text("hi"),
    );
  }
}