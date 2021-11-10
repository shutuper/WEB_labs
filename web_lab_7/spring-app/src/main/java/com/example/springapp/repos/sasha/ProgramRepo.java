package com.example.springapp.repos.sasha;

import com.example.springapp.models.sasha.Program;
import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;

import java.util.Optional;


public interface ProgramRepo extends JpaRepository<Program, Long> {


}
